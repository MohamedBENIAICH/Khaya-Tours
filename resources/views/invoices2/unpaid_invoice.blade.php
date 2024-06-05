<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        .container {
            width: 800px;
            margin: 40px auto;
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .logo {
            width: 120px;
            height: 80px;
            margin-bottom: 20px;
            text-align: center;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .header h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        .table th {
            background-color: #f0f0f0;
        }

        #qrcode {
            position: relative;
            display: block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('frontend/img/logo.jpeg') }}" alt="Khaya Tours Logo" width="150" height="120" style="margin-left: 253%">
        </div><br>
        <h1 style="margin-left: 37%">Khaya Tours</h1>
        <p>Thank you for choosing Khaya Tours! We appreciate your business and hope you have a wonderful experience.</p>
        <p>We value your feedback and would love to hear about your experience with us. Please feel free to contact us at any time.</p>
        <div class="heade;r">
            <h3 style="margin-left: 40%">Invoice Details</h3>
        </div>
        <table class="table">
            <tr>
                <th>User:</th>
                <td>{{ $invoice->user->name }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $invoice->user->email }}</td>
            </tr>
            <tr>
                <th>Amount:</th>
                <td>${{ $invoice->amount }}</td>
            </tr>
            <tr>
                <th>Status:</th>
                <td>{{ $invoice->status }}</td>
            </tr>
            <tr>
                <th>Issued At:</th>
                <td>{{ $invoice->issued_at }}</td>
            </tr>
        </table>
        

        <p><strong>Contact Us:</strong> khayatours@gmail.com | +212615885011 | Zagora, Morocco</p>
        <p><strong>Terms and Policy:</strong> Khaya Tours is a travel agency. Please note that all transactions are subject to our terms and conditions, which can be found on our website.</p>

        <script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const invoice = {
                    user: "{{ $invoice->user->name }}",
                    email: "{{ $invoice->user->email }}",
                    amount: "{{ $invoice->amount }}",
                    status: "{{ $invoice->status }}",
                    issued_at: "{{ $invoice->issued_at }}"
                };

                const invoiceString = `User: ${invoice.user}\nEmail: ${invoice.email}\nAmount: $${invoice.amount}\nStatus: ${invoice.status}\nIssued At: ${invoice.issued_at}`;

                // Create a new QR code object
                new QRCode(document.getElementById('qrcode'), {
                    text: invoiceString,
                    width: 200,
                    height: 200,
                    colorDark: '#000000',
                    colorLight: '#ffffff',
                });
            });
        </script>

    </div>

</body>

</html>
