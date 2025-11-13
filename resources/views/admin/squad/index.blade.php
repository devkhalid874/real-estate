@extends('admin.layouts.app')

@section('title', 'Squad')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center px-3">
          <h6 class="text-white text-capitalize mb-0">Squad Section</h6>
          <a href="{{ route('admin.squad.create')}}" class="btn btn-light btn-sm">
            <i class="bi bi-plus-circle me-1"></i> Add Section
          </a>
        
        </div>
      </div>

      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0 table-bordered text-wrap">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Designation</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
              </tr>
            </thead>

<tbody>
    @foreach($squads as $squad)
        <tr>
            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">{{ $squad->id }}</span>
            </td>
            <td style="white-space: normal; word-wrap: break-word; max-width: 200px;">
                <h6 class="mb-0 text-sm">{{ $squad->name }}</h6>
            </td>
            <td style="white-space: normal; word-wrap: break-word; max-width: 300px;">
             <p class="text-xs mb-0">{{ $squad->designation }}</p>
            </td>
            <td class="align-middle">
                @if($squad->image)
                    <img src="{{ asset('uploads/squad/' . $squad->image) }}" width="80" class="rounded-2">
                @else
                    <span class="text-muted text-xs">No Image</span>
                @endif
            </td>
            <td class="align-middle text-center">
                <a href="{{ route('admin.squad.edit', $squad->id) }}" class="btn btn-sm btn-warning">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <form action="{{ route('admin.squad.destroy', $squad->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ms-1" onclick="return confirm('Are you sure?')">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>



          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
