    <!-- Modal -->
<div wire:ignore.self class="modal fade" id="AddBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Brands</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form wire:submit.prevent="storeBrand">
        <div class="modal-body">
            <div class="mb-3">
                <label>Brand Name</label>
                <input type="text" wire:model.defer="name" class="form-control">
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label>Brand Slug</label>
                <input type="text" wire:model.defer="slug" class="form-control">
                @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label>Status</label>
                <input type="checkbox" wire:model.defer="status"> Checked=Hidden, Un-Checked=Visible
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


    <!-- Brand Update Modal -->
<div wire:ignore.self class="modal fade" id="updateBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Brands</h5>
        <button type="button" class="close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


        <form wire:submit.prevent="updateBrand">
            <div class="modal-body">
                <div class="mb-3">
                    <label>Brand Name</label>
                    <input type="text" wire:model.defer="name" class="form-control">
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label>Brand Slug</label>
                    <input type="text" wire:model.defer="slug" class="form-control">
                    @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <input type="checkbox" wire:model.defer="status"> Checked=Hidden, Un-Checked=Visible
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

    </div>
  </div>
</div>



    <!-- Brand Update Modal -->
<div wire:ignore.self class="modal fade" id="deleteBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Brands</h5>
        <button type="button" class="close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


        <form wire:submit.prevent="destroyBrand">
            <div class="modal-body">
                <h4>Are you sure you want to delete this brand?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">No, close</button>
                <button type="submit" class="btn btn-primary">Yes, delete</button>
            </div>
        </form>

    </div>
  </div>
</div>
