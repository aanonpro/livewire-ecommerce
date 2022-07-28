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
                    <h4 class="card-title">Edit Slider
                        <a href="{{ url('admin/sliders') }}" class="text-white btn btn-danger btn-sm float-end">
                           back
                        </a>
                    </h4>
                    <p class="card-description">
                      {{-- Add class <code>.table-striped</code> --}}
                    </p>
                    <div class="table-responsive">

                        <form action="{{ url('admin/sliders/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" value="{{ $slider->title }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3">{{ $slider->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset("$slider->image") }}" alt="slider" style="width:50px; height: 50px;">
                            </div>
                            <div class="mb-3">
                                <label>Status</label><br>
                                <input type="checkbox" name="status" {{$slider->status == '1' ? 'checked': '' }} style="width: 30px; height: 30px;"> ( checked=hidden,unchecked=visible)
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
