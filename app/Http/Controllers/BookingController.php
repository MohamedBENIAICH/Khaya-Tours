<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Booking;
use Srmklive\PayPal\Services\ExpressCheckout;

class BookingController extends Controller
{
    public function showBookingPage($id)
    {
        // Fetch the destination based on the provided ID
        $destination = Destination::findOrFail($id);

        // Pass the destination data to the booking page view
        return view('frontend.booking_page', ['destination' => $destination]);
    }

    public function confirmBooking(Request $request, $id)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'gender' => 'required|string',
        'age' => 'required|integer',
    ]);

    // Create a new booking
    $booking = new Booking();
    $booking->destination_id = $id;
    $booking->client_id = auth()->id(); // Assuming the user is authenticated
    $booking->name = $request->input('name');
    $booking->email = $request->input('email');
    $booking->phone = $request->input('phone');
    $booking->gender = $request->input('gender');
    $booking->age = $request->input('age');
    $booking->save(); 

    // Redirect the user to the checkout page with the booking ID as a parameter
    //return redirect()->route('payment.paywithpaypal', ['booking' => $booking->id]);
    return view('frontend.paywithpaypal', compact('booking'));
    }

    public function checkout($bookingId)
    {
        // Retrieve the booking by its ID
        $booking = Booking::findOrFail($bookingId);

        // Perform any necessary processing or validation before initiating checkout

        // Redirect the user to the PayPal payment page
        return redirect()->route('payment.pay', ['booking' => $bookingId]);
    }

    public function bookingSuccess()
    {
        $bookings = Booking::where('client_id', auth()->id())->get();
        return "good";
    }

    public function payOnArrival(Booking $booking)
    {
        // Assuming $destination is set with some value
        $destination = Destination::find($booking->destination_id); // Example of fetching destination information
        return view('payment.arrival', compact('destination', 'booking'));
    }
}