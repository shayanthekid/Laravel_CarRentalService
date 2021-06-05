    
    @extends('layouts.layouts')
    
    @section('content')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
       <h1 class="text-gray-600 dark:text-gray-400">Cars</h1>
       
 

    @foreach ($Cars as $car)
         <p class="text-gray-600 dark:text-gray-400">

         {{$car['Type']}}
        </p>
       
         <p class="text-gray-600 dark:text-gray-400">

         {{$name}}
        </p>
       

    @endforeach

    <img src="/img/test.jpg" alt="">

    </div>
    @endsection
