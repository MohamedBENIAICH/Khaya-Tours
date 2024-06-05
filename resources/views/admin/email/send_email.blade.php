@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Content Row -->
    <div class="card shadow">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ __('Send Email')}}</h1>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/mail', $user->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="subject">{{ __('Subject') }}</label>
                    <input type="text" class="form-control" id="subject" placeholder="{{ __('Subject') }}" name="subject" value="{{ old('subject') }}" required />
                </div>
                <div class="form-group">
                    <label for="message">{{ __('Message') }}</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">{{ __('Send')}}</button>
            </form>
        </div>
    </div>

</div>
@endsection

@push('style-alt')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.select-multiple').select2();
</script>
@endpush
