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
                    <h4 class="card-title">PRODUCTS
                        <a href="{{ url('admin/products/create') }}" class="text-white btn btn-primary btn-sm float-end">Add Product</a>

                    </h4>
                    <p class="card-description">
                      {{-- Add class <code>.table-striped</code> --}}
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td class="py-1">{{$product->id}} </td>
                                    <td class="py-1">
                                        @if ($product->category)
                                            {{$product->category->name}}
                                        @endif
                                    </td>
                                    <td class="py-1">{{$product->name}} </td>
                                    <td class="py-1">{{$product->selling_price}} </td>
                                    <td class="py-1">{{$product->quantity}} </td>
                                    <td class="py-1">{{$product->status == '1' ? 'Hidden':'Visible'}} </td>
                                    <td>
                                        <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{ url('admin/products/'.$product->id.'/delete') }}" onclick="return confirm('Are you sure want to delete thid data?')" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                              </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="py-1">
                                        No product Available
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
