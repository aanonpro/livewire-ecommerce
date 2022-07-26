<div>

  @include('livewire.admin.brand.modal-form')
   
   <div class="row">
      <div class="col-md-12">
        <div class="col-9  grid-margin" style="margin: auto;">
              <div class="card">
                @if (session('status'))
                  <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="card-body">
                  <h4 class="card-title">BRANDS
                      <a href="#" class="text-white btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#addBrandModal">Add brand</a></h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($brands as $brand)
                           <tr>
                              <td>{{ $brand->id }}</td>
                              <td>{{ $brand->name }}</td>
                              <td>{{ $brand->slug }}</td>
                              <td>{{ $brand->status == '1' ? 'Hidden' : 'Active' }}</td>
                              <td>
                                 <a href="#" wire:click="editBrand({{ $brand->id }})" data-bs-toggle="modal" data-bs-target="#updateBrandModal" class="btn btn-sm btn-success "> Edit</a>
                                 <a href="#" wire:click="deleteBrand({{ $brand->id }})" data-bs-toggle="modal" data-bs-target="#deleteBrandModal"  class="btn btn-sm btn-danger "> Delete</a>
                              </td>
                           </tr>
                        @empty
                           <tr>
                              <td colspan="5">No Brand show</td>
                           </tr>
                        @endforelse
                     
                      </tbody>
                    </table>
                    <div class="mt-3">
                      {{ $brands->links() }}
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

        $('#addBrandModal').modal('hide');
        $('#updateBrandModal').modal('hide');
        $('#deleteBrandModal').modal('hide');
    });
</script>

@endpush