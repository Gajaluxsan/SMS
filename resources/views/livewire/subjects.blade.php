<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif



    @if ($edit_mode)
        @include('livewire.edit_subject')
    @else
        @include('livewire.create_subject')
    @endif
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>S_id</th>
                <th>S_name</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->S_id }}</td>
                    <td>{{ $subject->S_name }}</td>
                    <td>
                    <button wire:click="edit('{{ $subject->id }}')" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete('{{ $subject->id }')" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
