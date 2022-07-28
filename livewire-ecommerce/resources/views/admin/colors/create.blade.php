@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="col-lg-9 grid-margin stretch-card" style="margin: auto">

              <div class="card">
                @if(session('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>
                @endif
                  <div class="card-body">
                    <h4 class="card-title">Add Colors
                        <a href="{{ url('admin/colors') }}" class="text-white btn btn-danger btn-sm float-end">
                           back
                        </a>
                    </h4>
                    <p class="card-description">
                      {{-- Add class <code>.table-striped</code> --}}
                    </p>
                    <div class="table-responsive">

                        <form action="{{ url('admin/colors/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Color Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Color Code</label>
                                <input type="text" name="code" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Status</label><br>
                                <input type="checkbox" name="status" style="width: 50px; height: 50px;"> ( checked=hidden,unchecked=visible)
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                   
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

@endsection
