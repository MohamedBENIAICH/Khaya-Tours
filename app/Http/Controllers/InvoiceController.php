<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Invoice;
use App\Notifications\Invoice as InvoiceNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function createInvoice($bookingId, $status = 'paid')
    {
        $booking = Booking::findOrFail($bookingId);
        $user = Auth::user(); // Retrieve the authenticated user

        // Ensure a user is authenticated
        if (!$user) {
            return null; // Return null if no user is authenticated
        }

        // Generate unique invoice number
        $invoiceNumber = 'INV-' . time();

        // Create the invoice with the correct user_id
        $invoice = Invoice::create([
            'invoice_number' => $invoiceNumber,
            'booking_id' => $booking->id,
            'user_id' => $user->id, // Use the user ID of the authenticated user
            'amount' => $booking->destination->price, // Assuming the amount is the destination price
            'status' => $status, // Use the provided status
            'issued_at' => now(),
        ]);

        return $invoice;
    }

    public function sendInvoiceEmail(Request $request)
    {
        $bookingId = $request->input('booking_id');
        $invoice = $this->createInvoice($bookingId, 'paid');

        // Check if the invoice is null
        if ($invoice === null) {
            return response()->json(['error' => 'Failed to create invoice.']);
        }

        // Check if the invoice has a user associated with it
        if ($invoice->user === null) {
            return response()->json(['error' => 'Invoice does not have a user associated with it.']);
        }

        // Send the invoice email
        Notification::route('mail', $invoice->user->email)->notify(new InvoiceNotification($invoice->id));

        return response()->json(['message' => 'We have sent you an invoice to your email.']);
    }

    public function sendArrivalInvoiceEmail(Request $request)
    {
        $bookingId = $request->input('booking_id');
        $invoice = $this->createInvoice($bookingId, 'unpaid');

        // Check if the invoice is null
        if ($invoice === null) {
            return response()->json(['error' => 'Failed to create invoice.']);
        }

        // Check if the invoice has a user associated with it
        if ($invoice->user === null) {
            return response()->json(['error' => 'Invoice does not have a user associated with it.']);
        }

        // Send the invoice email
        Notification::route('mail', $invoice->user->email)->notify(new InvoiceNotification($invoice->id));

        return response()->json(['message' => 'We have sent you an invoice to your email.']);
    }

    public function showPaidInvoice($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('invoices.paid_invoice', compact('invoice'));
    }

    public function showUnpaidInvoice($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('invoices2.unpaid_invoice', compact('invoice'));
    }

}