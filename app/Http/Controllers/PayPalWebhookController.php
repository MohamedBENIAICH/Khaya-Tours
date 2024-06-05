<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceMail;
use Illuminate\Support\Facades\Log;

class PayPalWebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $payload = $request->all();
        
        Log::info('PayPal Webhook received.', ['payload' => $payload]);
        
        if ($payload['event_type'] == 'PAYMENT.SALE.COMPLETED') {
            $bookingId = $payload['resource']['invoice_number']; // Assuming invoice_number is booking_id
            $this->createInvoice($bookingId);
        }
        
        return response()->json(['status' => 'success']);
    }

    private function createInvoice($bookingId)
    {
        $booking = Booking::findOrFail($bookingId);
        $user = $booking->user;

        // Generate unique invoice number
        $invoiceNumber = 'INV-' . time();

        // Create the invoice
        $invoice = Invoice::create([
            'invoice_number' => $invoiceNumber,
            'booking_id' => $booking->id,
            'user_id' => $user->id,
            'amount' => $booking->destination->price, // Assuming the amount is the destination price
            'status' => 'paid',
            'issued_at' => now(),
        ]);

        // Send the invoice email
        Mail::to($user->email)->send(new InvoiceMail($invoice));

        // Log successful invoice creation and email sending
        Log::info('Invoice created and sent successfully.', ['invoice_id' => $invoice->id]);

        return response()->json(['message' => 'Invoice created and sent successfully.']);
    }
}