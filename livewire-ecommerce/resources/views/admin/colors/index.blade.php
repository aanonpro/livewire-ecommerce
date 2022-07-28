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
                    <h4 class="card-title">Colors
                        <a href="{{ url('admin/colors/create') }}" class="text-white btn btn-primary btn-sm float-end">Add Colors</a>

                    </h4>
                    <p class="card-description">
                      {{-- Add class <code>.table-striped</code> --}}
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Color Name</th>
                            <th>Color Code</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($colors as $item)
                                <tr>
                                    <td class="py-1">{{$item->id}} </td>
                                    <td class="py-1">
                                            {{$item->name}}
                                    </td>
                                    <td class="py-1">{{$item->name}} </td>
                                    <td class="py-1">{{$item->status == '1' ? 'Hidden':'Visible'}} </td>
                                    <td>
                                        <a href="{{ url('admin/colors/'.$item->id.'/edit') }}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{ url('admin/colors/'.$item->id.'/delete') }}" onclick="return confirm('Are you sure want to delete thid data?')" class="btn btn-danger btn-sm">Delete</a>
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
