
 @extends('layouts.app')

  @section('content')
      

    @if ($user = auth()->user()['usertype'] === "Officer")
   
   
<div class="wrapper create-pizza">


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Manage Cars</h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('upload-photo')
                       
                    </div>
                </div>
            </div>
        </div>
        <h1>{{session('msg')}}</h1>
    </div>












 



<div class="container">
  <div class="row justify-content-center">
            <div class="col-md-8">
<div class="card">
   <div class="card-header">
                      
<h1>Delete Cars</h1>
                    </div>
  <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Brand</th>
                <th>Name</th>
                <th>Details</th>
                <th>IMGString</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Cars as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->brand }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->details }}</td>
                <td>{{ $value->IMGString }}</td>
                <td>
              <form action="/cars/{{$value['id']}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger" type="submit" >Delete </button>
                     </form>
                  </td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

<h1>{{session('msg2')}}</h1>
</div>
</div>
</div>



</div>

    @else
        
            <h1 class="text-gray-600 dark:text-gray-400">You are not authorized to access this page</h1>
    @endif


@livewireScripts
@endsection