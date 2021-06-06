    
    @extends('layouts.app')
    
    @section('content')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

@livewire('car-search-bar')

            <h1 class="text-gray-600 dark:text-gray-400">Cars</h1>
       
 

    @foreach ($Cars as $car)
    <a href="/cars/{{$car['id']}}">
          <p class="text-gray-600 dark:text-gray-400">


         {{$car['name']}} - {{$car['brand']}}
        </p>
    </a>
       
      
       

    @endforeach

    {{-- <img src="/img/test.jpg" alt=""> --}}

    </div>
    @livewireScripts
    @endsection
