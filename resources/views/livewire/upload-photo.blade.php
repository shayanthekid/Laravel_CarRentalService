<div>
   <form  action="/cars" method="POST">
@csrf
        <label for="name">Car name:</label>
        <input type="text" name="name" id="name">
        <label for="brand">Choose Brand</label>
        <select name="brand" id="brand">
            <option value="BMW">BMW</option>
            <option value="Toyota">Toyota</option>
            <option value="Porsche">Porsche</option>
        </select>
       
        
   
  <label for="details">Details</label>
    <textarea name="details" id="details" cols="30" rows="10"></textarea>
     @if ($photo)
        Photo Preview:
        <img src="{{ $photo->temporaryUrl() }}">
        <p> {{$photo->getClientOriginalName()}}</p>
    @endif

    <input type="file" wire:model="photo" name="IMGString" id="imgString">

    @error('photo') <span class="error">{{ $message }}</span> @enderror
<input type="submit" value="Create car">


</form>
</div>
