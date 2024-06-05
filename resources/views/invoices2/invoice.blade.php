<!DOCTYPE html>
<html>
<head>
    <title>Your Invoice</title>
</head>
<body>
    <h1>Invoice: {{ $invoice->invoice_number }}</h1>
    <p>Dear {{ $invoice->user->name }},</p>
    <p>Thank you for your booking. Here are the details of your invoice:</p>
    <ul>
        <li>Invoice Number: {{ $invoice->invoice_number }}</li>
        <li>Booking ID: {{ $invoice->booking->id }}</li>
        <li>Destination: {{ $invoice->booking->destination->city }}</li>
        <li>Amount: ${{ $invoice->amount }}</li>
        <li>Status: {{ $invoice->status }}</li>
        <li>Issued At: {{ $invoice->issued_at }}</li>
    </ul>
    <p>Thank you for choosing our service!</p>
</body>
</html>