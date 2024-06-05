<!-- resources/views/checkout.blade.php -->
@extends('frontend.layout')

@section('content')
<div class="container">
    <h1>Your booking details:</h1><br>
    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $booking->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $booking->email }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $booking->phone }}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{ $booking->gender }}</td>
        </tr>
        <tr>
            <th>Age</th>
            <td>{{ $booking->age }}</td>
        </tr>
    </table>
    <div class="d-flex justify-content-between">
        <form action="{{ route('checkout.pay', ['booking' => $booking->id]) }}" method="POST">
            @csrf
            <button class="Btn">
                Pay Now
                <svg class="svgIcon" viewBox="0 0 576 512">
                    <path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path>
                </svg>
            </button>
        </form>
    </div><br>
    <div class="d-flex justify-content-between">
        <form action="{{ route('checkout.payOnArrival', ['booking' => $booking->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="booking_id" value="{{ $booking->id }}">
            <button type="submit" class="button" style="margin-left: 1%; font-size: 12.7px; font-weight: bold;">
            <div class="button-top">Pay on arrival</div>
                <div class="button-bottom"></div>
                <div class="button-base"></div>
              </button>
        </form>
    </div><br><br><br>
</div>
@endsection