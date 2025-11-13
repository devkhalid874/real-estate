@extends('admin.layouts.app')

@section('title', 'Buying Selling')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            @php
        $count = \App\Models\BuyingSelling::count();
        @endphp
        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center px-3">
          <h6 class="text-white text-capitalize mb-0">Buying and Selling</h6>
          @if($count==0)
          <a href="{{ route('admin.buying_selling.create')}}" class="btn btn-light btn-sm">
            <i class="bi bi-plus-circle me-1"></i> Add Section
          </a>
          @endif
        </div>
      </div>

      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0 table-bordered text-wrap">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
              </tr>
            </thead>

<tbody>
    @foreach($buying_selling as $buying_sellings)
        <tr>
            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">{{ $buying_sellings->id }}</span>
            </td>
            <td style="white-space: normal; word-wrap: break-word; max-width: 200px;">
                <h6 class="mb-0 text-sm">{{ $buying_sellings->title }}</h6>
            </td>
            <td style="white-space: normal; word-wrap: break-word; max-width: 300px;">
                <p class="text-xs mb-0">{!! $buying_sellings->description !!}</p>
            </td>
            <td class="align-middle">
                @if($buying_sellings->image)
                    <img src="{{ asset('uploads/buying_selling/' . $buying_sellings->image) }}" width="80" class="rounded-2">
                @else
                    <span class="text-muted text-xs">No Image</span>
                @endif
            </td>
            <td class="align-middle text-center">
                <a href="{{ route('admin.buying_selling.edit', $buying_sellings->id) }}" class="btn btn-sm btn-warning">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <form action="{{ route('admin.buying_selling.destroy', $buying_sellings->id) }}" method="POST" class="d-inline">
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
