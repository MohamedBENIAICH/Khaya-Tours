@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ __('Upload Image') }}</h1>
                <a href="{{ route('admin.images.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.images.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="city">{{ __('City') }}</label>
                    <input type="text" class="form-control" id="city" placeholder="{{ __('City') }}" name="city" value="{{ old('city') }}" />
                </div>
                <div class="form-group">
                    <label for="destination_id">{{ __('Destination') }}</label>
                    <select name="destination_id" id="destination_id" class="form-control select-multiple">
                        <option value="">Select Destination</option>
                        @foreach($destinations as $destination)
                        <option value="{{ $destination->id }}">{{ $destination->city }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">{{ __('Image') }}</label>
                    <input type="file" class="form-control" id="image" name="image_path" />
                </div>
                <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('style-alt')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select-multiple').select2();
    });
</script>
@endpush
