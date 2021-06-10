  
  
  
  
      
    @extends('layouts.app')
    
    @section('content')

    @if ($user = auth()->user()['usertype'] === "Customer")
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

@if (!empty($Rented))
    <h1>Your Approved Rentals</h1>

                <table class="table table-bordered mt-5">
        <thead>
            <tr>
                 <th>UserID</th>
            <th>CarID</th>
      <th>Date Of Rent</th>
      <th>Date Of Return</th>
      <th>No. Of KM</th>
      <th>Price</th>
      <th>Approval</th>

            </tr>
        </thead>
        <tbody>
            @foreach($Rented as $rent)
            <tr>
           
        <td> {{$rent['user_id']}}</td>
        <td> {{$rent['car_id']}}</td>
        <td> {{$rent['DateOfRent']}}</td>
        <td> {{$rent['DateOfReturn']}}</td>
        <td> {{$rent['KM']}}</td>
        <td> {{$rent['Price']}}</td>
       
        <td> 

  <form action="" method="POST">
                
                    <button  class="btn btn-info btn-sm" name="btn-Delete"  type="submit" >Generate Invoice </button>
                     </form>
                     
            </tr>
            @endforeach
        </tbody>
    </table>

    @else
    <h2>You have no approved rented vehicles</h2>
@endif

    @else
        
            <h1 class="text-gray-600 dark:text-gray-400">You are not authorized to access this page</h1>
    @endif
    
    @livewireScripts
    @endsection

  
