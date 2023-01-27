<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if ($edit_mode)
        @include('livewire.edit_newadmission')
    @else
        @include('livewire.create_newadmission')
    @endif

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>NIC</th>
                <th>Address</th>
                <th>Phone_Number</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Email_Id</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newadmissions as $admission)
                <tr>
                    <td>{{ $admission->id }}</td>
                    <td>{{ $admission->Name }}</td>
                    <td>{{ $admission->NIC }}</td>
                    <td>{{ $admission->Address }}</td>
                    <td>{{ $admission->Phone_Number }}</td>
                    <td>{{ $admission->DOB }}</td>
                    <td>{{ $admission->Gender }}</td>
                    <td>{{ $admission->Email_Id }}</td>
                    <td>
                        <button wire:click="edit({{ $admission->id }})" class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="delete({{ $admission->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
