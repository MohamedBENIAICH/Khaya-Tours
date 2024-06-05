@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-gray">
                    {{ __('Destination Data') }}
                </h6>
                <div class="float-right">
                    <a href="{{ route('admin.images.create') }}" class="btn btn-success">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New Destination Image') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10"></th>
                                <th>No</th>
                                <th>{{ __('City') }}</th>
                                <th>{{ __('Image') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($images as $image)
                            <tr data-entry-id="{{ $image->id }}">
                                <td></td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $image->city }}</td>
                                <td>
                                    <a href="{{ Storage::url($image->image_path) }}">
                                        <img src="{{ Storage::url($image->image_path) }}" width="100" alt="">
                                    </a>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('admin.images.edit', $image->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form onclick="return confirm('Are you sure?')" class="d-inline" action="{{ route('admin.images.destroy', $image->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">{{ __('Data Empty') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->
</div>
@endsection


@push('style-alt')
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
@endpush

@push('script-alt') 
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#data-table").DataTable();
    });
    </script>
@endpush
