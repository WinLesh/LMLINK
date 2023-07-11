<div>
      @include('livewire.admin.brand.modal-form')

   <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Brands List
                        <a href="#" class="btn btn-sm btn-primary float-end" data-bs-toggle="modal" data-bs-target="#AddBrandModal">Add Brands</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Slug</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brands as $brand)
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->slug }}</td>
                                    <td>{{ $brand->status == '1' ? 'hidden' : 'visible' }}</td>
                                    <td>
                                        <a href="#" wire:click="editBrand({{ $brand->id }})" data-bs-target="#updateBrandModal" data-bs-toggle="modal" class="btn btn-sm btn-success">Edit</a>
                                        <a href="" wire:click="deleteBrand({{ $brand->id }})" data-bs-target="#deleteBrandModal" data-bs-toggle="modal" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="5">No Brands Found</td>
                            @endforelse

                        </tbody>
                    </table>
                    <div>
                        {{ $brands->links() }}
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

@push('script')

    <script>
        window.addEventListener('close-modal', event => {
            $('#AddBrandModal').modal('hide');
            $('#updateBrandModal').modal('hide');
            $('#deleteBrandModal').modal('hide');
        });
    </script>

@endpush

