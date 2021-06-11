<div>
   <form  action="/cars" method="POST" wire:submit="save">
@csrf
    <div class="form-group">
        <label for="name">Car name:</label>
        <input class="form-control"  type="text" name="name" id="name">
              @error('name') <span class="text-danger">{{ $message }}</span>@enderror
   </div>
            <div class="form-group">
        <label for="brand">Choose Brand</label>
        <input  class="form-control" type="text" name="brand" id="brand">
      @error('brand') <span class="text-danger">{{ $message }}</span>@enderror
  
      </div>
       
        
    <div class="form-group">
  <label for="details">Details</label>
    <textarea class="form-control"  name="details" id="details" cols="30" rows="10"></textarea>
        </div>
   <div class="form-group">
    @if ($photo)
        Photo Preview:
        <img  class="img-fluid"  src="{{ $photo->temporaryUrl() }}">
        <p> {{$photo->getClientOriginalName()}}</p>
        {{-- <input type="text" name="IMGString" id="imgString" value="{{$photo->getClientOriginalName()}}" hidden > --}}
    @endif
     </div>
     <div class="form-group">
    <input class="form-control" type="file" wire:model="photo" name="IMGString" id="imgString" >

    {{-- <img src="\storage\photo\photo-1566264956532-f479b4956774.jpg"> --}}
    @error('photo') <span class="error">{{ $message }}</span> @enderror

</div>
    <button class="btn btn-primary"  type="submit" value="Create car">Upload </button>



</form>
</div>
