
 @extends('layouts.app')

  @section('content')
      
<div class="wrapper create-pizza">

    <h1>Create a new Car</h1>
    <form action="/cars" method="POST">
@csrf
        <label for="name">Car name:</label>
        <input type="text" name="name" id="name">
        <label for="brand">Choose Brand</label>
        <select name="brand" id="brand">
            <option value="BMW">BMW</option>
            <option value="Toyota">Toyota</option>
            <option value="Porsche">Porsche</option>
        </select>
        <label for="IMGString">Image:</label>
        <input type="text" name="IMGString" id="imgString">
   <label for="driver_id">Driver ID</label>
        <input type="text" name="driver_id" id="driverID">
  <label for="details">Details</label>
    <textarea name="details" id="details" cols="30" rows="10"></textarea>
   
<input type="submit" value="Create car">

</form>

<h1>{{session('msg')}}</h1>
</div>

        
@endsection