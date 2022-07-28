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
                    <h4 class="card-title">Edit Colors
                        <a href="{{ url('admin/colors') }}" class="text-white btn btn-danger btn-sm float-end">
                           back
                        </a>
                    </h4>
                    <p class="card-description">
                      {{-- Add class <code>.table-striped</code> --}}
                    </p>
                    <div class="table-responsive">

                        <form action="{{ url('admin/colors/'.$color->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label>Color Name</label>
                                <input type="text" name="name" value="{{ $color->name }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Color Code</label>
                                <input type="text" name="code" value="{{ $color->name }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Status</label><br>
                                <input type="checkbox" name="status" {{ $color->status == '1' ? 'checked': '' }} style="width: 50px; height: 50px;"> ( checked=hidden,unchecked=visible)
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                   
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

@endsection
