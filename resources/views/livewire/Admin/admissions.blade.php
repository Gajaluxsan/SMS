
<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
    {{ session('message') }}
    </div>
    @endif

    @if ($edit_mode)
        @include('livewire.Admin.edit')
    @else
        @include('livewire.Admin.create')
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
                {{--  <th>Role</th>  --}}
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admissions as $admission)
                <tr>
                    <td>{{ $admission->id }}</td>
                    <td>{{ $admission->Name }}</td>
                    <td>{{ $admission->NIC }}</td>
                    <td>{{ $admission->Address }}</td>
                    <td>{{ $admission->Phone_Number }}</td>
                    <td>{{ $admission->DOB }}</td>
                    <td>{{ $admission->Gender }}</td>
                    <td>{{ $admission->Email_Id }}{{ $Email_Id }}</td>
                    {{--  <td>
                        @php
                        $role = Spatie\Permission\Models\Role::find($admission->Role);
                        echo $role->name;
                    @endphp  --}}
                </td>
                    <td>
                        <button wire:click="edidts({{ $admission->id }})" class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="delete('{{ $admission->id }}')" class="btn btn-danger btn-sm">Delete</button>
                       {{--  @if ($role->name == 'teacher')
                       <a href="T_S/{{ $admission->id }}"><button wire:click="" class="btn btn-success btn-sm">Details</button></a>
                       @endif  --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
