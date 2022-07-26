@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="col-lg-9 grid-margin stretch-card" style="margin: auto">
                <div class="card">
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
                            <th>
                              User
                            </th>
                            <th>
                              First name
                            </th>
                            <th>
                              Progress
                            </th>
                            <th>
                              Amount
                            </th>
                            <th>
                              Deadline
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="py-1">
                              <img src="../../images/faces/face1.jpg" alt="image"/>
                            </td>
                            <td>
                              Herman Beck
                            </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>
                              $ 77.99
                            </td>
                            <td>
                              May 15, 2015
                            </td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

@endsection