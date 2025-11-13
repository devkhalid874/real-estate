@extends('admin.layouts.app')

@section('title', 'Property')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center px-3">
          <h6 class="text-white text-capitalize mb-0">Property List</h6>
          <a href="#" class="btn btn-light btn-sm">
            <i class="bi bi-plus-circle me-1"></i> Add Property
          </a>
        </div>
      </div>

      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
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
                <tr>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">1</span>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Luxury Apartment</h6>
                        <p class="text-xs text-secondary mb-0">Downtown Dubai</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">Premium living space</p>
                    <p class="text-xs text-secondary mb-0">High-end amenities</p>
                  </td>
                  <td class="align-middle">
                    <img src="{{ asset('assets/img/home-decor-1.jpg') }}" width="80" class="rounded-2">
                  </td>
                  <td class="align-middle text-center">
                    <a href="#" class="btn btn-sm btn-warning">
                      <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-danger ms-1">
                      <i class="bi bi-trash"></i>
                    </a>
                  </td>
                </tr>

              <tr>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">2</span>
                </td>
                <td>
                  <div class="d-flex px-2 py-1">
               
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">Palm Jumeirah Villa</h6>
                      <p class="text-xs text-secondary mb-0">Palm Jumeirah</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Luxury beachfront villa</p>
                  <p class="text-xs text-secondary mb-0">Private pool & sea view</p>
                </td>
                <td class="align-middle">
                  <img src="{{ asset('assets/img/home-decor-2.jpg') }}" width="80" class="rounded-2">
                </td>
                <td class="align-middle text-center">
                  <a href="#" class="btn btn-sm btn-warning">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger ms-1">
                    <i class="bi bi-trash"></i>
                  </a>
                </td>
              </tr>

              <tr>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">3</span>
                </td>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">Business Bay Office</h6>
                      <p class="text-xs text-secondary mb-0">Business Bay</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Corporate workspace</p>
                  <p class="text-xs text-secondary mb-0">Ideal for startups</p>
                </td>
                <td class="align-middle">
                  <img src="{{ asset('assets/img/home-decor-3.jpg') }}" width="80" class="rounded-2">
                </td>
                <td class="align-middle text-center">
                  <a href="#" class="btn btn-sm btn-warning">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger ms-1">
                    <i class="bi bi-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
