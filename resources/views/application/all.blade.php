@extends('layouts.app')

@section('content')
<style>
    th {
        white-space: nowrap;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 table-responsive">
            <table  class="table  table-bordered table-hover  table-striped">
                <thead>
                    <tr>
                        <th scope="col">Sr #</th>
                        <th scope="col">Applicant Name</th>
                        <th scope="col">Applicant Email</th>
                        <th scope="col">Applicant Phone Number</th>
                        <th scope="col">Nominee Name</th>
                        <th scope="col">Nominee Email</th>
                        <th scope="col">Nominee Phone Number</th>
                        <th scope="col">Appartment Number</th>
                        <th scope="col">Appartment Size</th>
                        <th scope="col">Floor</th>
                        <th scope="col">Edit</th>
                        <th scope="col">View</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>

                <tbody>
                   @foreach($applications as $application)

                    <tr>
                        <td scope="row">{{$application->id}}</td>
                        <td>{{$application->applicant_name}}</td>
                        <td>{{$application->applicant_email}}</td>
                        <td>{{$application->applicant_mobile_number}}</td>
                        <td>{{$application->nominee_name}}</td>
                        <td>{{$application->nominee_email}}</td>
                        <td>{{$application->nominee_mobile_number}}</td>
                        <td>{{$application->apartment_number}}</td>
                        <td>{{$application->apartment_size}}</td>
                        <td>{{$application->apartment_floor}}</td>
                        <td><a href="" class="btn btn-primary">Edit</a></td>
                        <td><a href="" class="btn btn-success">View</a></td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>

                   @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
