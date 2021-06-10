<div>
   <form  action="/cars" method="POST" wire:submit="save">
@csrf
        <label for="name">Car name:</label>
        <input type="text" name="name" id="name">
        <label for="brand">Choose Brand</label>
        <input type="text" name="brand" id="brand">

       
        
   
  <label for="details">Details</label>
    <textarea name="details" id="details" cols="30" rows="10"></textarea>
     @if ($photo)
        Photo Preview:
        <img src="{{ $photo->temporaryUrl() }}">
        <p> {{$photo->getClientOriginalName()}}</p>
        {{-- <input type="text" name="IMGString" id="imgString" value="{{$photo->getClientOriginalName()}}" hidden > --}}
    @endif

    <input type="file" wire:model="photo" name="IMGString" id="imgString" >

    {{-- <img src="\storage\photo\photo-1566264956532-f479b4956774.jpg"> --}}
    @error('photo') <span class="error">{{ $message }}</span> @enderror
<button  type="submit" value="Create car">Upload </button>



</form>
</div>
