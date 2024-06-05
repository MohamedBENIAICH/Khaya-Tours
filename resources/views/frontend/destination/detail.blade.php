@extends('frontend.layout')

@section('content')
<div class="slider_area">
  <div class="slider_active owl-carousel">
    @foreach ($images as $image)
            <div
      style="background-image: url({{ Storage::url($image->image_path) }})"
      class="single_slider d-flex align-items-center overlay">
    </div>
    @endforeach
  </div>
</div>
    <div class="destination_text text-center">
      <h3 style="font-family: 'Arial, sans-serif'; font-size: 24px; color: #2c3e50; text-align: center; margin-top: 20px; margin-bottom: 20px; border-bottom: 2px solid #2c3e50; padding-bottom: 10px;">
        {{ $destination->city }}
    </h3>
        </div>

<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9">
                <div class="destination_oinfo">
                  <h3 style="font-family: 'Arial, sans-serif'; font-size: 24px; color: #2c3e50; text-align: center; margin-top: 20px; margin-bottom: 20px; border-bottom: 2px solid #2c3e50; padding-bottom: 10px;">
                    Description
                </h3>
                <div style="font-family: 'Arial, sans-serif'; font-size: 16px; color: #34495e; line-height: 1.6; text-align: justify; margin: 20px; padding: 20px; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    {{ $destination->description }}
                </div>
                
                </div>
                <div class="bordered_1px"></div>
                <div class="contact_join">
                  <h3 class="text-center" style="font-family: 'Arial, sans-serif'; font-size: 24px; color: #2c3e50; margin-top: 20px; margin-bottom: 20px; border-bottom: 2px solid #2c3e50; padding-bottom: 10px;">
                    Booking
                </h3>
                                    @auth <!-- Check if user is authenticated -->
                                    <a href="{{ route('show.booking.page', ['id' => $destination->id]) }}" class="book" style="
                                      display: inline-block;
                                      text-decoration: none;
                                      outline: none;
                                      cursor: pointer;
                                      border: none;
                                      padding: 0.9rem 2rem;
                                      margin: 0;
                                      font-family: inherit;
                                      font-size: inherit;
                                      letter-spacing: 0.05rem;
                                      font-weight: 700;
                                      font-size: 17px;
                                      border-radius: 500px;
                                      overflow: hidden;
                                      background: #66ff66;
                                      color: ghostwhite;
                                      position: relative;
                                      margin-left: 40.3%;
                                  ">
                                      <span style="
                                          position: relative;
                                          z-index: 10;
                                          transition: color 0.4s;
                                      ">Book Now</span>
                                      <style>
                                          a.book:hover span {
                                              color: black;
                                          }
                                          a.book::before,
                                          a.book::after {
                                              position: absolute;
                                              top: 0;
                                              left: 0;
                                              width: 100%;
                                              height: 100%;
                                              z-index: 0;
                                          }
                                          a.book::before {
                                              content: '';
                                              background: #000;
                                              width: 120%;
                                              left: -10%;
                                              transform: skew(30deg);
                                              transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
                                          }
                                          a.book:hover::before {
                                              transform: translate3d(100%, 0, 0);
                                          }
                                      </style>
                                  </a>
                                                      @else
                                                      <button type="button" data-toggle="modal" data-target="#loginModal" class="book" style="
                                                      outline: none;
                                                      cursor: pointer;
                                                      border: none;
                                                      padding: 0.9rem 2rem;
                                                      margin: 0;
                                                      font-family: inherit;
                                                      font-size: inherit;
                                                      position: relative;
                                                      display: inline-block;
                                                      letter-spacing: 0.05rem;
                                                      font-weight: 700;
                                                      font-size: 17px;
                                                      border-radius: 500px;
                                                      overflow: hidden;
                                                      background: #66ff66;
                                                      color: ghostwhite;
                                                  ">
                                                      <span style="
                                                          position: relative;
                                                          z-index: 10;
                                                          transition: color 0.4s;
                                                      ">Book Now</span>
                                                      <style>
                                                          button.book:hover span {
                                                              color: black;
                                                          }
                                                          button.book::before,
                                                          button.book::after {
                                                              position: absolute;
                                                              top: 0;
                                                              left: 0;
                                                              width: 100%;
                                                              height: 100%;
                                                              z-index: 0;
                                                          }
                                                          button.book::before {
                                                              content: '';
                                                              background: #000;
                                                              width: 120%;
                                                              left: -10%;
                                                              transform: skew(30deg);
                                                              transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
                                                          }
                                                          button.book:hover::before {
                                                              transform: translate3d(100%, 0, 0);
                                                          }
                                                      </style>
                                                  </button>
                                                  
                    @endauth
                </div>
                <!--<button id="theme-toggle">Toggle Theme</button>-->
            </div>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>You need to <a href="{{ route('login') }}">log in</a> before booking.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection