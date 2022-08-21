<div>

    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Category Delete</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyCategory">
                <div class="modal-body">
                    <h6>Are you sure you want to deleted this category?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes, Delete</button>
                </div>
            </form>
          </div>
        </div>
      </div>


<div class="row">
    <div class="col-md-12">
      <div class="col-9  grid-margin" style="margin: auto;">
            <div class="card">
              @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
              @endif
              <div class="card-body">
                <h4 class="card-title">CATEGORY
                    <a href="{{url('/admin/category/create')}}" class="text-white btn btn-primary btn-sm float-end">Add Category</a></h4>
                {{-- <p class="card-description">
                  Add class <code>.table-striped</code>
                </p> --}}
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category )
                        <tr>
                            <td class="py-1">
                                {{$category->id}}

                            </td>
                            <td>{{ $category->name }}</td>
                            <td><img src="{{ asset("$category->image")}}" alt="{{$category->name}}" style="width: 50px; height: 50;"/></td>
                            <td>{{ $category->status == '1' ? 'Hidden':'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/category/'.$category->id.'/edit') }}" class="btn btn-success">Edit</a>
                                <a href="#" wire:click="deleteCategory({{$category->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Deleted</a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <div class="mt-3">
                    {{ $categories->links() }}
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
</div>

</div>

@push('script')

<script>
    window.addEventListener('close-modal', event =>{
        $('#deleteModal').modal('hide');
    });
</script>

@endpush
