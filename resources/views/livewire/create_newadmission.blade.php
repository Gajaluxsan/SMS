<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form id="form">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Name:</label>
                    <input wire:model='Name' type="text" class="form-control" id="">
                    @error('Name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">NIC:</label>
                    <input wire:model='NIC' type="text" class="form-control" id="">
                    @error('NIC')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Address:</label>
                    <input wire:model='Address' type="text" class="form-control" id="">
                    @error('Address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Phone_Number:</label>
                    <input wire:model='Phone_Number' type="integer" class="form-control" id="">
                    @error('Phone_Number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">DOB:</label>
                    <input wire:model='DOB' type="date" class="form-control" id="">
                    @error('DOB')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Gender:</label><br>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input wire:model='Gender' type="radio" class="btn-check" name="btnradio" value="Male"
                            id="Male" autocomplete="off">
                        <label class="btn btn-outline-primary" for="Male">Male </label>
                        <input type="radio" wire:model='Gender' class="btn-check" name="btnradio" id="Female"
                            value="Female" autocomplete="off">
                        <label class="btn btn-outline-primary" for="Female">Female</label>
                        @error('Gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Email_Id:</label>
                    <input wire:model='Email_Id' type="email" class=" form-control" id="">
                    @error('Email_Id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Password:</label>
                    <input wire:model='Password' type="password" class="form-control" id="">
                    @error('Password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <button wire:click.prevent="store()" class="btn btn-success mt-4">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="">Role:</label>
            <select class="form-select role" aria-label="Default select example">
                <option selected>Select Role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" style="text-transform: capitalize">
                        {{ ucfirst($role->name) }}
                    </option>
                @endforeach
            </select>
            @error('Role')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row" id="attid" style="display:none">
        <div class="col">
            <div class="form-group S_C">
                <label for="">Class_Teacher:</label><br>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input wire:model='Class_Teacher' type="radio" class="btn-check" name="btnradio"
                        value="Yes" id="Yes" autocomplete="off">
                    <label class="btn btn-outline-primary" for="Yes">Yes </label>
                    <input wire:model='Class_Teacher' type="radio" class="btn-check" name="btnradio"
                        id="No" value="No" autocomplete="off">
                    <label class="btn btn-outline-primary" for="No">No</label>
                    @error('Class_Teacher')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row" id="Selectclass" style="display:none">
            <div class="col">
                <div class="form-group">
                    <label for="">Select Class:</label>
                    <select class="form-select "aria-label="Default select example">
                        <option selected>Select Class</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->Class_id }}">
                                {{ $class->Class_id }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Select Class:</label>
                    <select class="form-select " aria-label="Default select example">
                        <option selected>Select Class</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->Class_id }}">
                                {{ $class->Class_id }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Select Subjects</label>
                    <select class="form-select " aria-label="Default select example">
                        <option selected>Select Subject</option>
                        @foreach ($subjects as $sub)
                            <option value="{{ $sub->S_id }}" style="text-transform: capitalize">
                                {{ ucfirst($sub->S_name) }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <button wire:click.prevent="westore()" class="btn btn-primary mt-4">
                        Add
                    </button>
                    <button wire:click.prevent="westore()" class="btn btn-danger mt-4">
                        Remove
                    </button>
                </div>
            </div>
        </div>
    </div>
   
    <button wire:click="storess()" class="btn btn-success mt-3">Save</button>
</form>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
{{--  Display none  --}}
<script>
    $(document).ready(function() {
        $(".role").on('change', function() {
            var id = $(this).val();
            if (id == 4) {
                $("#attid").show();
            } else {
                $("#attid").hide();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".S_C").on('change', function() {
            var Val = $(".btn-check:checked").val();
            if (Val == "Yes") {
                $("#Selectclass").show();
            } else {
                $("#Selectclass").hide();
            }
        });
    });
</script>
{{--  End Display none  --}}
