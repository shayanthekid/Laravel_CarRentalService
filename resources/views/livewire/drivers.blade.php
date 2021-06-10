<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
  @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>DOB</th>
                <th>Experience</th>
                <th>car_id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($driver as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->DOB }}</td>
                <td>{{ $value->Experience }}</td>
                <td>{{ $value->car_id }}</td>
                <td>
                <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
