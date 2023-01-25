@extends('welcome')
@section('body')

    <div class="container">
        <body>
            <h1 style="color:rgb(235, 11, 11);text-align:center;">Teachers Details</h1>
            <div class="row mb-3">

                <label>Teacher Name:</label>
                <div class="col-sm-10">
                   {{ $fullDetail->Name}}
                </div>
            </div>
            <div class="row mb-3">
                <label>NIC:</label>
                <div class="col-sm-10">
                   {{ $fullDetail->NIC }}
                </div>
            </div>
            <div class="row mb-3">
                <label>Address:</label>
                <div class="col-sm-10">
                   {{ $fullDetail->Address }}
                </div>
            </div>
            <div class="row mb-3">
                <label>Phone Number:</label>
                <div class="col-sm-10">
                   {{ $fullDetail->Phone_Number }}
                </div>
            </div>
            <div class="row mb-3">
                <label>DOB:</label>
                <div class="col-sm-10">
                   {{ $fullDetail->DOB }}
                </div>
            </div>
            <div class="row mb-3">
                <label>Gender:</label>
                <div class="col-sm-10">
                   {{ $fullDetail->Gender }}
                </div>
            </div>
            <div class="row mb-3">
                <label>Email_Id:</label>
                <div class="col-sm-10">
                    {{ $fullDetail->Email_Id }}
                </div>
            </div>
            <table id="datatable" class="table table-boreded data-table">
                <thead>
                    <tr>
                        <th>Teacher Name</th>
                        <th>Subject Id</th>
                        <th>Subject Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($T_S[0]->subjects as $sub)

                    <tr>
                        <td>
                            {{ $fullDetail->Name }}
                        </td>
                        <td>
                            {{ $sub->S_id }}

                        </td>
                        <td>
                            {{ $sub->S_name }}
                        </td>
                        <td>
                        <button  class="btn btn-primary btn-sm">Add</button>
                        <button  class="btn btn-danger btn-sm">Edit</button>
                    </td>
                    </tr>
                @endforeach
            </table>
        @endsection
