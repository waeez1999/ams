@extends('layouts.app')

@section('content')
<style>
    th {
        white-space: nowrap;
    }
</style>

@foreach($application_data as $application)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-dark pt-3 ps-3 pb-2">
            <div class="headerTitle">
            </div>
        </div>

        <pre>
        {{ dd($application) }}
        </pre>

        <div class="col-md-6 bg-dark pt-3 pe-3 pb-2">
            <div class="headerTitle text-end">
                <a href="#" class="btn btn-primary">Add New</a>
                <a href="#" class="btn btn-danger">Trashed</a>
            </div>
        </div>

    </div>
</div>
@endforeach


@endsection
