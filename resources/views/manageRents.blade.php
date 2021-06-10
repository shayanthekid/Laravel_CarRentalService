@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Rented Enquries</div>

                <div class="card-body">
                                
        {{-- <img src="\storage\photo\{{$car['IMGString']}}"> --}}
   
 

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
      <th>Actions</th>

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
        <td> {{$rent['approval']}}</td>
        <td> 

  <form action="/admin/manageRents/{{$rent['car_id']}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger btn-sm" name="btn-Delete"  type="submit" >Delete </button>
                     </form>
                     
 <form action="/admin/manageRents/{{$rent['car_id']}}" method="POST">
                 @csrf
                    <button class="btn btn-primary btn-sm"  type="submit" name="btn-Approve">Approve </button>
                     </form>
        </td>
            </tr>
            @endforeach
        </tbody>
    </table>

       

    
        
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
