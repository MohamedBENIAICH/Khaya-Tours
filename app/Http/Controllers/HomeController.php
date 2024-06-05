<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Testimonial;
use Symfony\Component\Console\Descriptor\Descriptor;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::latest()->get();
        $destinations = Destination::latest()->get();
        $testimonials = Testimonial::latest()->get();
        return view('frontend.home' , compact('sliders','destinations','testimonials'));
    }
}