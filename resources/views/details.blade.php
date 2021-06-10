    
    @extends('layouts.app')
    
    @section('content')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
       <h1 class="text-gray-600 dark:text-gray-400">
           {{$car->name}} -
        {{$car->brand}} - 
        </h1>


@livewire('maps-distance')

        @forelse ($car->driver as $model)
            
        {{$model['name']}}
        @empty
            
        @endforelse

 {{var_dump($response->json()['rows'][0]['elements'][0]['duration'])}}
        <a href="/cars">Back to cars</a>
        </div>
        
  @livewireScripts
    @endsection
