<?php

// app/Http/Controllers/Admin/ImageController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ImageRequest;
use App\Models\Image;
use App\Models\Destination;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all(); // Fetch all images from the database
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::all(); // Fetch all destinations from the database
        return view('admin.images.create', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\ImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
        $imagePath = $request->file('image_path')->store('images', 'public');

        Image::create([
            'destination_id' => $request->destination_id,
            'city' => $request->city,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.images.index')->with('success', 'Image added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('admin.images.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        $destinations = Destination::all(); // Fetch all destinations from the database
        return view('admin.images.edit', compact('destinations','image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\ImageRequest  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(ImageRequest $request, Image $image)
    {
        $image->update([
            'destination_id' => $request->destination_id,
            'city' => $request->city,
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images', 'public');
            $image->update(['image_path' => $imagePath]);
        }

        return redirect()->route('admin.images.index')->with('success', 'Image updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();
        return redirect()->route('admin.images.index')->with('success', 'Image deleted successfully');
    }
}
