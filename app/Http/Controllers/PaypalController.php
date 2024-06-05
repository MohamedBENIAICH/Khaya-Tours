<?php

namespace App\Http\Controllers;

use PayPal\Exception\PPConnectionException;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use App\Models\Destination;
use App\Models\Booking;
use App\Models\Payment as PaymentModel; // Make sure this line is added
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    public function payment($bookingId){
        // Retrieve the booking by its ID
        $booking = Booking::findOrFail($bookingId);
        
        // Retrieve the destination associated with the booking
        $destination = Destination::findOrFail($booking->destination_id);
    
        // Create data for PayPal payment
        $data = [
            'items' => [
                [
                    'name' => 'Booking for Destination' . $destination->name, // Adjust the name as needed
                    'price' => $destination->price, // Assuming price comes from the destination
                    'desc' => 'Booking for ' . $booking->name, // Add booking information
                ]
            ],
            'invoice_id' => $booking->id,
            'invoice_description' => "Order #{$booking->id} Invoice",
            'return_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
            'total' => $destination->price, // Assuming price comes from the destination
        ];
    
        // Initiate PayPal payment
        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($data, true);
    
        // Redirect the user to PayPal for payment
        return redirect($response['paypal_link']);    
    }

    public function cancel(){
        return response()->json('Payment Cancelled', 402);
    }

    public function success(Request $request){
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);
    
        if(in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])){
            // Retrieve the booking associated with the payment
            $booking = Booking::findOrFail($response['INVNUM']);
    
            // Retrieve the destination associated with the booking
            $destination = Destination::findOrFail($booking->destination_id);
    
            // Store the payment in the database
            PaymentModel::create([
                'amount' => $response['AMT'],
                'status' => $response['ACK'],
                'client_id' => $booking->client_id, // Assuming you have a client_id field in your booking table
            ]);

            // Pass the destination data to the view
            return view('payment.success', ['booking' => $booking, 'destination' => $destination]);
        }  
        return response()->json('Fail payment', 402);
    }
}