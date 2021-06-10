<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    

<input type="text"
 class="form-input" 
 placeholder="Enter starting destination"
 wire:model="origin"

 >

 <input type="text"
 class="form-input" 
 placeholder="Enter ending destination"
 wire:model="destination"

 >


@if (empty($data))
  


    
@else
    
@php
    $Start_point =$data['origin_addresses'][0];
    $End_point =$data['destination_addresses'][0] ;
    $Distance = $data['rows'][0]['elements'][0]['distance']['text'];
    $DistanceInt = $data['rows'][0]['elements'][0]['distance']['value'];
    $DistanceTotal = 0.05 * $DistanceInt;
    $current_address= $data['rows'][0]['elements'][0]['distance']['text'];
    $Duration = $data['rows'][0]['elements'][0]['duration']['text'];
@endphp

<h4>Your Starting address is: {{  $Start_point}} </h4>
<h4>Your Ending point is:  {{$End_point}} </h4>

<p>
    The distance between these two places is : {{$Distance}} 
</p>
<p> Your total price would be {{$DistanceTotal}} Rs </p>
<p> Estimated time {{$Duration}} </p>
@endif

    <button wire:click="Query">Like Post</button>

  


 @if(!empty($Distance))
 <h2>Rent your car today!</h2>
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
  <div class="card">
  <div class="card-body">
@php
    $carid = Session::get('carID');
@endphp

    <form action="/cars/{{$carid}}" method="post">
        
<div class="form-group">
    @csrf
        <label for="exampleFormControlInput2">Date of Rent</label>
        <input type="date" class="form-control" id="DateOfRent"  name="DateOfRent" placeholder="Enter Date of Rent">
        @error('DOB') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <input type="text" id="user_id" name="user_id" value="{{$user = auth()->user()['id']}}" hidden >
        <input type="text" id="car_id" name="car_id" value="{{$carid}}" hidden  >
        <input type="text" id="KM" name="KM" value="{{$DistanceInt}}" hidden >
        <input type="text" id="Price" name="Price" value="{{$DistanceTotal}}" hidden  >
     
 
        <label for="exampleFormControlInput2">Date of return</label>
        <input type="date" class="form-control" id="DateOfReturn" name="DateOfReturn"  placeholder="Enter Date of Return">
        @error('DOB') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button type="submit" > Rent! </button>
    </form>
  </div>
  </div>
            </div>
        </div>
   </div>
@endif

</div>
