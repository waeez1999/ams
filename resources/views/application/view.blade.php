@extends('layouts.app')

@section('content')
<style>
    th {
        white-space: nowrap;
    }
</style>

@if($applications)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-dark pt-3 ps-3 pb-2">
            <div class="headerTitle">
                <h2 class="text-white">{{ $applications->applicant_guardian }}</h2>
            </div>
        </div>

        <div class="col-md-6 bg-dark pt-3 pe-3 pb-2">
            <div class="headerTitle text-end">
                <a href="#" class="btn btn-primary">Add New</a>
                <a href="#" class="btn btn-danger">Trashed</a>
            </div>
        </div>

    </div>
</div>
@endif


@endsection
