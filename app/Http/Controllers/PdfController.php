<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Log;

class PdfController extends Controller
{
    public function index()
    {
        return view('emprunt_pdf');
    }

    public function generate(Request $request)
    {
        // Your existing generate method
        // This method remains unchanged
    }

    public function generateBill(Request $request)
    {
        // Validate the form input (you can add more validation rules as needed)
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'gender' => 'required|string',
            'age' => 'required|integer',
        ]);

        // Create PDF options
        $options = new Options();
        $options->set('defaultFont', 'Arial');

        // Instantiate Dompdf
        $dompdf = new Dompdf($options);

        // Generate HTML content for PDF
        $html = '<div style="background-color: #f5f5f5; color: black; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);">';
        $html .= '<div style="text-align: center; margin-bottom: 20px;">';
        $html .= '<p><strong style="color: #db8f23;">Khaya Tours</strong></p>';
        $html .= '<h1>Booking Information</h1>';
        $html .= '<p><strong style="color: #db8f23;">Name:</strong> ' . $request->name . '</p>';
        $html .= '<p><strong style="color: #db8f23;">Email:</strong> ' . $request->email . '</p>';
        $html .= '<p><strong style="color: #db8f23;">Phone:</strong> ' . $request->phone . '</p>';
        $html .= '<p><strong style="color: #db8f23;">Gender:</strong> ' . $request->gender . '</p>';
        $html .= '<p><strong style="color: #db8f23;">Age:</strong> ' . $request->age . '</p>';
        $html .= '</div>';
        $html .= '<div style="text-align: center; margin-top: 50px;">';
        $html .= '<p>Thank you for booking with us!</p>';
        $html .= '<p>&copy; ' . date('Y') . ' KHAYA TOURS - All rights reserved.</p>';
        $html .= '</div>';
        $html .= '</div>';

        // Load HTML content into Dompdf
        $dompdf->loadHtml($html);

        // Render PDF
        $dompdf->render();

        // Log PDF generation
        // Log PDF generation
        Log::info('PDF generated for booking');

        // Download the PDF with a custom filename
        return $dompdf->stream('booking_bill.pdf');
    }
}