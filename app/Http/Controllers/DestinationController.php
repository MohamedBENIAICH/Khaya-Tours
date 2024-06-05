<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Slider;
use App\Models\Testimonial;
use Symfony\Component\Console\Descriptor\Descriptor;

class DestinationController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $destinations = Destination::latest()->get();
        return view('frontend.destination' , compact('destinations'));
    }
    
    public function show(Destination $destination)
    {
        $images = Image::where('destination_id', $destination->id)->get();
        return view('frontend.destination.detail', compact('destination', 'images'));
    }
}