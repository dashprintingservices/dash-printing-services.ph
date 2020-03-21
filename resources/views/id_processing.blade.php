@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ID Processing</div>
                <div class="card-body">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        Upload Validation Error<br><br>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <form method="post" enctype="multipart/form-data" action="{{ url('/importExcel') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <table class="table">
                                <tr>
                                    <td width="40%" align="right"><label>Select File for Upload</label></td>
                                    <td width="30">
                                        <input type="file" name="select_file" />
                                    </td>
                                    <td width="30%" align="left">
                                        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%" align="right"></td>
                                    <td width="30"><span class="text-muted">.xls, .xslx</span></td>
                                    <td width="30%" align="left"></td>
                                </tr>
                            </table>
                        </div>
                    </form>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr><th colspan="6">Personal Information</th><th colspan="4">Person to contact incase of emergency</td></tr>
                                <tr>
                                    <th>ID #</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Address</th>
                                    <th>Contact #</th>
                                    <th>Birthdate</th>
                                    <th>Name</th>
                                    <th>Relation</th>
                                    <th>Address</th>
                                    <th>Contact #</th>
                                </tr>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{ $row->id_no }}</td>
                                    <td>{{ $row->full_name }}</td>
                                    <td>{{ $row->position }}</td>
                                    <td>{{ $row->address }}</td>
                                    <td>{{ $row->contact_number }}</td>
                                    <td>{{ $row->date_of_birth }}</td>
                                    <td>{{ $row->ptc_name }}</td>
                                    <td>{{ $row->ptc_address }}</td>
                                    <td>{{ $row->ptc_relationship }}</td>
                                    <td>{{ $row->ptc_contact_number }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection