
 @extends('layouts.app')

  @section('content')
      
<div class="wrapper create-pizza">

   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Manage Drivers</h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('drivers')
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- 

<table> 
      <td style=" padding: 5px 0px 0px 85px;"><b> Name </td>
    <td style=" padding: 5px 0px 0px 85px;">  <b>Brand </td>
    <td style=" padding: 5px 0px 0px 85px;">  <b>Details </td>
    <td style=" padding: 5px 0px 0px 85px;">  <b>Action </td>
    @foreach ($Drivers as $driver)



        <tr>
          
                  <td style=" padding: 5px 0px 0px 85px;">{{$driver['name']}}</td>
                  <td style=" padding: 5px 0px 0px 85px;">{{$driver['brand']}}</td>
                  <td style=" padding: 5px 0px 0px 85px;">{{$driver['details']}}</td>
                  <td style=" padding: 5px 0px 0px 85px;">
                  <form action="/cars/{{$driver['id']}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  type="submit" >Delete </button>
                     </form>
                  </td>

              
                </tr>
       

    @endforeach
 
</table> --}}

<h1>{{session('msg2')}}</h1>

</div>

@livewireScripts
@endsection