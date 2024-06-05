@extends('frontend.layout')

@section('content')
<div class="section_title text-center mb_70">
    <h1>You have chosen to pay on arrival</h1>
    <p>Continue to get you invoice</p>

    <form action="{{ route('sendArrivalInvoiceEmail') }}" method="POST">
        @csrf
        <input type="hidden" name="booking_id" value="{{ $booking->id }}">
        <button class="button" type="submit" style="margin-left: 2%; font-size: 10.71px;">
            <span class="button__text">Click Here</span>
            <span class="button__icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" id="bdd05811-e15d-428c-bb53-8661459f9307" data-name="Layer 2" class="svg">
                </svg>
            </span>
        </button>
    </form>
</div>
@endsection