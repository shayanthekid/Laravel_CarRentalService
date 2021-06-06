<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

<input type="text"
 class="form-input" 
 placeholder="Search car"
 wire:model="query"
 wire:keydown.escape="resetFilters"
 wire:keydown.tab="resetFilters"
 >



@if(!empty($query))

@if(!empty($cars))
<div>

{{-- <div wire:loading>Searching</div> --}}
 @foreach ($cars as $car)
    <a href="/cars/{{$car['id']}}">
          <p class="text-gray-600 dark:text-gray-400">


         {{$car['name']}} - {{$car['brand']}}
        </p>
    </a>
       
      
       

    @endforeach
</div>

@else
<div class="list-item">
<p>No results</p>

</div>

@endif
@endif

</div>
