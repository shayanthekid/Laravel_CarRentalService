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
<p> No data </p>    


    
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
{{$origin}}
    <button wire:click="Query">Like Post</button>


</div>
