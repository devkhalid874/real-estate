@extends('admin.layouts.app')

@section('title', 'Add Off Plan')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center px-3">
          <h6 class="text-white text-capitalize mb-0">Add Off Plan</h6>
          <a href="{{ route('admin.off_plan.index') }}" class="btn btn-light btn-sm">
            <i class="bi bi-arrow-left"></i> Back
          </a>
        </div>
      </div>

      <div class="card-body px-4 pb-4">
        <form action="{{ route('admin.off_plan.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <!-- Title -->
          <div class="mb-3">
            <label for="title" class="form-label fw-bold">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter title (e.g. Our Vision)">
          </div>

          <!-- Description -->
          <div class="mb-3">
            <label for="description" class="form-label fw-bold">Description</label>
            <textarea name="description" id="description" rows="4" class="form-control" placeholder="Enter description"></textarea>
          </div>

          <!-- Image -->
          <div class="mb-3">
            <label for="image" class="form-label fw-bold">Image</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>

          <button type="submit" class="btn bg-gradient-dark text-white">
            <i class="bi bi-save"></i> Save Section
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