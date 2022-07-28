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
                    <h4 class="card-title">Slider List
                        <a href="{{ url('admin/sliders/create') }}" class="text-white btn btn-primary btn-sm float-end">Add Sliders</a>

                    </h4>
                    <p class="card-description">
                      {{-- Add class <code>.table-striped</code> --}}
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($sliders as $slider)

                                <tr>
                                    <td class="py-1">{{$slider->id}} </td>
                                    <td class="py-1">{{$slider->title}}</td>
                                    <td class="py-1">{{$slider->description}} </td>
                                    <td class="py-1">
                                        <img src="{{ asset("$slider->image") }}" style="width: 70px; height: 70px;" alt="">
                                    </td>
                                    <td class="py-1">{{$slider->status == '1' ? 'Hidden':'Visible'}} </td>
                                    <td>
                                        <a href="{{ url('admin/sliders/'.$slider->id.'/edit') }}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{ url('admin/sliders/'.$slider->id.'/delete') }}" onclick="return confirm('Are you sure want to delete thid data?')" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                              </tr>
                              @empty
                                <tr>
                                    <td colspan="5" class="py-3">
                                        <h4>No colors added</h4>
                                    </td>
                              </tr>
                              @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

@endsection
