@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="me-md-3 me-xl-5">
            @if(session('status'))
                <h2 class="alert alert-success">{{session('status')}}</h2>
            @endif
            <p class="mb-md-0">Your analytics dashboard template.</p>
          </div>
          <div class="d-flex">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
            {{-- <p class="text-primary mb-0 hover-cursor">Analytics</p> --}}
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-end flex-wrap">
          <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
            <i class="mdi mdi-download text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-clock-outline text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-plus text-muted"></i>
          </button>
          <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
        </div>
      </div>
    </div>
</div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body dashboard-tabs p-0">
        <ul class="nav nav-tabs px-4" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
          </li>
        </ul>
        <div class="tab-content py-0 px-0">
          <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
            <div class="d-flex flex-wrap justify-content-xl-between">
              <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <a href="{{url('/admin/category')}}" class="text-decoration-none">
                  <i class="mdi mdi-view-list  icon-lg me-3 text-primary"></i>
                </a>
                <div class="d-flex flex-column justify-content-around">
                  <a href="{{url('/admin/category')}}" class="text-decoration-none">
                    <small class="mb-1 text-muted">Categories</small>
                  </a>
                  <h5 class="mb-0 d-inline-block">{{$category}}</h5>
                </div>
              </div>
              <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <a href="{{url('/admin/products')}}" class="text-decoration-none">
                  <i class="mdi mdi-shopping me-3 icon-lg text-danger"></i>
                </a>
                <div class="d-flex flex-column justify-content-around">
                  <a href="{{url('/admin/products')}}" class="text-decoration-none">
                    <small class="mb-1 text-muted">Products</small>
                  </a>
                  <h5 class="me-2 mb-0">{{$product}}</h5>
                </div>
              </div>
              <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <a href="{{url('/admin/brands')}}" class="text-decoration-none">
                  <i class="mdi mdi-tag-multiple me-3 icon-lg text-success"></i>
                </a>
                <div class="d-flex flex-column justify-content-around">
                  <a href="{{url('/admin/brands')}}" class="text-decoration-none">
                    <small class="mb-1 text-muted">Brands</small>
                  </a>
                  <h5 class="me-2 mb-0">{{$brand}}</h5>
                </div>
              </div>
              <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <a href="{{url('/admin/sliders')}}" class="text-decoration-none">
                  <i class="mdi mdi-theater me-3 icon-lg text-warning"></i>
                </a>
                <div class="d-flex flex-column justify-content-around">
                  <a href="{{url('/admin/sliders')}}" class="text-decoration-none">
                    <small class="mb-1 text-muted">Sliders</small>
                  </a>
                  <h5 class="me-2 mb-0">{{$slider}}</h5>
                </div>
              </div>
              <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <i class="mdi mdi-account-multiple me-3 icon-lg text-danger"></i>
                <div class="d-flex flex-column justify-content-around">
                  <small class="mb-1 text-muted">Users</small>
                  <h5 class="me-2 mb-0">{{$users}}</h5>
                </div>
              </div>
              <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <i class="mdi mdi-account-check me-3 icon-lg text-primary"></i>
                <div class="d-flex flex-column justify-content-around">
                  <small class="mb-1 text-muted">Admins</small>
                  <h5 class="me-2 mb-0">{{$admins}}</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
