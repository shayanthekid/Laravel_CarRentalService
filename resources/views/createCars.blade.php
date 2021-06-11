
 @extends('layouts.app')

  @section('content')
      

    @if ($user = auth()->user()['usertype'] === "Officer")
   
   
<div class="wrapper create-pizza">

    <h1>Create a new Car</h1>
    

@livewire('upload-photo')

 

<h1>{{session('msg')}}</h1>

<h1>Delete Cars</h1>



<table> 
      <td style=" padding: 5px 0px 0px 85px;"><b> Name </td>
    <td style=" padding: 5px 0px 0px 85px;">  <b>Brand </td>
    <td style=" padding: 5px 0px 0px 85px;">  <b>Details </td>
    <td style=" padding: 5px 0px 0px 85px;">  <b>Action </td>
    @foreach ($Cars as $car)



        <tr>
          
                  <td style=" padding: 5px 0px 0px 85px;">{{$car['name']}}</td>
                  <td style=" padding: 5px 0px 0px 85px;">{{$car['brand']}}</td>
                  <td style=" padding: 5px 0px 0px 85px;">{{$car['details']}}</td>
                  <td style=" padding: 5px 0px 0px 85px;">
                  <form action="/cars/{{$car['id']}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  type="submit" >Delete </button>
                     </form>
                  </td>

              
                </tr>
       

    @endforeach
 
</table>

<h1>{{session('msg2')}}</h1>

</div>

    @else
        
            <h1 class="text-gray-600 dark:text-gray-400">You are not authorized to access this page</h1>
    @endif


@livewireScripts
@endsection