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
                        <input type="radio" wire:model='Gender' class="btn-check" name="btnradio" id="Female" value="Female"
                            autocomplete="off">
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
                </div>
                <button wire:click.prevent="update()" class="btn btn-success mt-3"> Update</button>
                <button wire:click.prevent="cancelUpdate()" class="btn btn-danger mt-3"> Cancel</button>
            </div>
        </div>
    </div>
</form>
