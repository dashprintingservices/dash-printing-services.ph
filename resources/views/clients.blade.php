@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Clients Data</div>
                <div class="card-body" >
                    <table class="table table-bordered" style="font-size:12px;">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>School / Company</th>
                            <th>Address</th>
                            <th>Contact #</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ms. Gemma Dalugdug</td>
                                <td>Principal</td>
                                <td>Bayview Elementary School</td>
                                <td>Bayview, Batangas 2, Mariveles, Bataan</td>
                                <td>none</td>
                                <td></td>
                            <tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
