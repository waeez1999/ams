@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-primary" style="width: 18rem;">
                <div class="card-body text-white">
                  <h5 class="card-title">Application Form</h5>
                  <p class="card-text"></p>
                  <a href="{{ route('addApplicant') }}" class="btn btn-light">Add New Applicant</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
