@extends('frontend.layout')

@section('content')
<div class="slider_area">
  <!-- destination -->
  <div class="popular_places_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section_title text-center mb_70">
            <h3>Destinations</h3>
            <p>
              Discover the most wonderfull cities of Morocco.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($destinations as $destination)
        <div class="col-lg-4 col-md-6">
          <div class="single_place">
            <div class="thumb">
              <img src="{{ Storage::url($destination->image) }}" alt="" />
              <a href="{{ route('destination.show', $destination->city) }}" class="prise">${{ $destination->price }}</a>
            </div>
            <div class="place_info">
              <a href="{{ route('destination.show', $destination->city) }}"><h3>{{ $destination->city }}</h3></a>
              <p>{{ $destination->province }}</p>
              <div class="rating_days d-flex justify-content-between">
                <div class="days">
                  <i class="fa fa-clock-o"></i>
                  <a href="{{ route('destination.show', $destination->city) }}">{{ $destination->duration }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

  </div>
  <!-- end -->

  <!-- testimonial_area  -->

  <!-- /testimonial_area  -->
@endsection