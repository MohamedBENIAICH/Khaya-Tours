<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Symfony\Component\Console\Descriptor\Descriptor;

use function Ramsey\Uuid\v1;

class DetailController extends Controller
{
    public function show(Destination $destination){
        return view('frontend.destination.detail', compact('destination'));
    }
}
