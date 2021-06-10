    
    @extends('layouts.app')
    
    @section('content')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
       <h1 class="text-gray-600 dark:text-gray-400">
           {{$car->name}} -
        {{$car->brand}} - 
        </h1>
@php

    Session::put('carID', $car->id);
@endphp

@livewire('maps-distance')

        @forelse ($car->driver as $model)
            <h4>Meet your Driver!</h4>
            <h5>His name is:  {{$model['name']}}</h5>
            <h5>He was born on:  {{$model['DOB']}}</h5>
            <h5>He has worked with us for over {{$model['Experience']}} years</h5>
       
        @empty
            <h5>No driver assigned</h5>
        @endforelse
{{-- 

    
 {{var_dump($response->json()['rows'][0]['elements'][0]['duration'])}} --}}

 
        
  @livewireScripts
    @endsection
