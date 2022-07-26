@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="col-9  grid-margin" style="margin: auto;">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Category
                    <a href="{{url('/admin/category')}}" class="text-white btn btn-danger btn-sm float-end">Back</a>
                </h4>
                <form class="form-sample" action="{{ url('/admin/category') }}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <p class="card-description">
                    Category info
                  </p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" class="form-control" autofocus required/>
                          {{-- @error('name')
                            <small class="text-danger">{{ $status }}</small>
                          @enderror --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Slug</label>
                        <div class="col-sm-9">
                          <input type="text" name="slug" class="form-control" required/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Status</label>
                          <div class="col-sm-9">
                              <div class="form-check">
                                  <label class="form-check-label">
                                      <input type="checkbox" name="status" class="form-check-input" >
                                      Checked
                                  </label>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <p class="card-description">
                    SEO Tag
                  </p>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Meta title</label>
                          <div class="col-sm-9">
                            <input type="text" name="meta_title" class="form-control" />
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                            <textarea name="description" class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>

                  </div>

                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Meta keyword</label>
                          <div class="col-sm-9">
                            <textarea name="meta_keyword" class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Meta description</label>
                          <div class="col-sm-9">
                            <textarea name="meta_description" class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label"></label>
                          <div class="col-sm-9">
                            <button type="submit" class="btn text-white btn-primary me-2">Save Category</button>
                          </div>
                        </div>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
    </div>
</div>

@endsection
