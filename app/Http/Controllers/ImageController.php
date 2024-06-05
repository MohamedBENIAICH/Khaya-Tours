<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Destination;

class ImageController extends Controller
{
    public function index()
{
    // Fetch all images from the database
    $images = Image::all();
    
    // Fetch destination data (assuming it's coming from somewhere)
    return view('frontend.destination.detail', compact('images'));
}

}