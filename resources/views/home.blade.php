@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-body text-white">
                  <h5 class="card-title">Application Form</h5>
                  <p class="card-text"></p>
                  <a href="{{ url('add-applicant') }}" class="btn btn-light">Add New Applicant</a>
                </div>
              </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-success">
                <div class="card-body text-white">
                  <h5 class="card-title">All Applications</h5>
                  <p class="card-text"></p>
                  <a href="{{ url('all-applicants') }}" class="btn btn-light">View All Applications</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
