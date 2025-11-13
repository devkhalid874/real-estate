@extends('admin.layouts.app')

@section('title', 'Edit Contact Section')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center px-3">
          <h6 class="text-white text-capitalize mb-0">Edit Contact Section</h6>
          <a href="{{ route('admin.contact.index') }}" class="btn btn-light btn-sm">
            <i class="bi bi-arrow-left"></i> Back
          </a>
        </div>
      </div>

      <div class="card-body px-4 pb-4">
        <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <!-- Address -->
          <div class="mb-3">
            <label for="title" class="form-label fw-bold">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $contact->address }}">
          </div>

          <!-- Phone -->
          <div class="mb-3">
            <label for="phone" class="form-label fw-bold">Phone</label>
            <textarea name="phone" id="phone" rows="4" class="form-control">{!! $contact->phone !!}</textarea>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email }}">

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
    CKEDITOR.replace('phone');
</script>
@endpush
