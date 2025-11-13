@extends('admin.layouts.app')

@section('title', 'Add Squad Section')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center px-3">
          <h6 class="text-white text-capitalize mb-0">Add Squad Section</h6>
          <a href="{{ route('admin.squad.index') }}" class="btn btn-light btn-sm">
            <i class="bi bi-arrow-left"></i> Back
          </a>
        </div>
      </div>

      <div class="card-body px-4 pb-4">
        <form action="{{ route('admin.squad.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <!-- Name -->
          <div class="mb-3">
            <label for="name" class="form-label fw-bold">Name</label>
            <input type="text" name="name" id="title" class="form-control" placeholder="Enter Name (e.g. Our Vision)">
          </div>

          <!-- Designation -->
          <div class="mb-3">
            <label for="designation" class="form-label fw-bold">Designation</label>
            <textarea name="designation" id="designation" rows="4" class="form-control" placeholder="Enter designation"></textarea>
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


