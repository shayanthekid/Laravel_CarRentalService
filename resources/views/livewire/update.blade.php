<form>
  <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" class="form-control" id="Name" placeholder="Enter Name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Date of Birth</label>
        <input type="date" class="form-control" id="DOB" wire:model="DOB" placeholder="Enter Date of birth">
        @error('DOB') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Experience</label>
        <input type="text" class="form-control" id="Experience" wire:model="Experience" placeholder="Enter Experience">
        @error('Experience') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Car ID</label>
        <input type="number" class="form-control" id="car_id" wire:model="car_id" placeholder="Enter Car ID">
        @error('car_id') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>