@extends('admin.layouts.app')

@section('title', 'Edit Property Management Section')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center px-3">
          <h6 class="text-white text-capitalize mb-0">Edit Property Management</h6>
          <a href="{{ route('admin.property_management.index') }}" class="btn btn-light btn-sm">
            <i class="bi bi-arrow-left"></i> Back
          </a>
        </div>
      </div>

      <div class="card-body px-4 pb-4">
        <form action="{{ route('admin.property_management.update', $property->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <!-- Title -->
          <div class="mb-3">
            <label for="title" class="form-label fw-bold">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $property->title }}">
          </div>

          <!-- Description -->
          <div class="mb-3">
            <label for="description" class="form-label fw-bold">Description</label>
            <textarea name="description" id="description" rows="4" class="form-control">{!! $property->description !!}</textarea>
          </div>

          <!-- Current Image -->
          @if($property->image)
            <div class="mb-3">
              <label class="form-label fw-bold">Current Image</label><br>
              <img src="{{ asset('uploads/property_management/' . $property->image) }}" width="100" class="rounded-2 mb-2">
            </div>
          @endif

          <!-- Upload New Image -->
          <div class="mb-3">
            <label for="image" class="form-label fw-bold">Change Image</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>

          <button type="submit" class="btn bg-gradient-dark text-white">
            <i class="bi bi-save"></i> Update Section
          </button>

        </form>
      </div>
    </div>
  </div>
</div>

@endsection
@push('scripts')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endpush
