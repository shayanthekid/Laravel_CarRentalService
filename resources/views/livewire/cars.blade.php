<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
  
  
    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.upload-photo')
    @endif
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
            @foreach($car as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->brand }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->details }}</td>
                <td>{{ $value->IMGString }}</td>
                <td>
                <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

