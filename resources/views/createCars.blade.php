
 @extends('layouts.app')

  @section('content')
      
<div class="wrapper create-pizza">

    <h1>Create a new Car</h1>
    

@livewire('upload-photo')

 

<h1>{{session('msg')}}</h1>
</div>

@livewireScripts
@endsection