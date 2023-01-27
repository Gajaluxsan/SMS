<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">S_id:</label>
                    <input wire:model='S_id' type="text" class="form-control" id="">
                    @error('S_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">S_name:</label>
                    <input wire:model='S_name' type="text" class="form-control" id="">
                    @error('S_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <button wire:click.prevent="update()" class="btn btn-success mt-3"> Update</button>
    <button wire:click.prevent="cancelUpdate()" class="btn btn-danger mt-3"> Cancel</button>

</form>
