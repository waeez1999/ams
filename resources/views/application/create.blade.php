@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bg-light mb-3">
                <div class="card-header">
                    Applicant Information
                    <a href="" class="btn btn-primary btn-sm">View All Applicants</a>
                </div>
                <div class="card-body">

                @if(session('status'))
                    <h6 class="alert alert-success mb-4">{{ session('status') }}</h6>
                @endif
                  <h3 class="card-title">Personal Information</h3>
                  <hr>
                  <form action="{{ url('add-applicant') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Name of Applicant:</label>
                                <input type="text" class="form-control" name="applicant_name">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>S/O, D/O, W/O:</label>
                                <input type="text" class="form-control" name="applicant_guardian">
                            </div>
                        </div> 

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Applicant Picture:</label>
                                <input type="file" class="form-control" name="c_image">
                            </div>
                        </div> 
                        
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>CNIC Number:</label>
                                <input type="text" class="form-control" name="applicant_cnic_number">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>CNIC Picture:</label>
                                <input type="file" class="form-control" name="applicant_cnic_image">
                            </div>
                        </div> 
                        
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Passport Number:</label>
                                <input type="text" class="form-control" name="applicant_passport_number">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Passport Picture:</label>
                                <input type="file" class="form-control" name="applicant_passport_image">
                            </div>
                        </div>
                        
                        
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Mailing Address:</label>
                                <input type="text" class="form-control" name="applicant_mailing_address">
                            </div>
                        </div> 
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label>District:</label>
                                <input type="text" class="form-control" name="applicant_district">
                            </div>
                        </div> 
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label>City:</label>
                                <input type="text" class="form-control" name="applicant_city">
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label>Country:</label>
                                <input type="text" class="form-control" name="applicant_country">
                            </div>
                        </div> 
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="applicant_email">
                            </div>
                        </div> 


                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Phone No (Res):</label>
                                <input type="text" class="form-control" name="applicant_phone_number">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Mobile:</label>
                                <input type="text" class="form-control" name="applicant_mobile_number">
                            </div>
                        </div> 
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Office:</label>
                                <input type="text" class="form-control" name="applicant_office_number">
                            </div>
                        </div> 


                        <div class="col-md-12 mt-4">
                            <hr>
                            <h3 class="card-title">Nominee Information</h3>
                            <hr>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Nominee Name:</label>
                                <input type="text" class="form-control" name="nominee_name">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>S/O, D/O, W/O:</label>
                                <input type="text" class="form-control" name="nominee_guardian">
                            </div>
                        </div> 

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Relationship with Applicant:</label>
                                <input type="text" class="form-control" name="nominee_relation_with_applicant">
                            </div>
                        </div> 

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>CNIC Number:</label>
                                <input type="text" class="form-control" name="nominee_cnic_number">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>CNIC Picture:</label>
                                <input type="file" class="form-control" name="nominee_cnic_image">
                            </div>
                        </div> 
                        
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Passport Number:</label>
                                <input type="text" class="form-control" name="nominee_passport_number">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Passport Picture:</label>
                                <input type="file" class="form-control" name="nominee_passport_image">
                            </div>
                        </div>


                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Mailing Address:</label>
                                <input type="text" class="form-control" name="nominee_mailing_address">
                            </div>
                        </div> 
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label>District:</label>
                                <input type="text" class="form-control" name="nominee_district">
                            </div>
                        </div> 
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label>City:</label>
                                <input type="text" class="form-control" name="nominee_city">
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label>Country:</label>
                                <input type="text" class="form-control" name="nominee_country">
                            </div>
                        </div> 
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="nominee_email">
                            </div>
                        </div> 


                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Phone No (Res):</label>
                                <input type="text" class="form-control" name="nominee_phone_number">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Mobile:</label>
                                <input type="text" class="form-control" name="nominee_mobile_number">
                            </div>
                        </div> 
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Office:</label>
                                <input type="text" class="form-control" name="nominee_office_number">
                            </div>
                        </div> 


                        <div class="col-md-12 mt-4">
                            <hr>
                            <h3 class="card-title">Appartment Plan</h3>
                            <hr>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Apartment No:</label>
                                <input type="text" class="form-control" name="apartment_number">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Approximate Size:</label>
                                <input type="text" class="form-control" name="apartment_size">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Floor:</label>
                                <input type="text" class="form-control" name="apartment_floor">
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Total Price:</label>
                                <input type="text" class="form-control" name="apartment_total_price">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Discount <small>(for lumpsum)</small>:</label>
                                <input type="text" class="form-control" name="apartment_discount">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Net Price:</label>
                                <input type="text" class="form-control" name="apartment_net_price">
                            </div>
                        </div>

                        
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Payment of Plan:</label>
                                <select type="text" class="form-control" name="apartment_payment_plan">
                                    <option value="monthly">Monthly</option>
                                    <option value="quarterly">Quarterly</option>
                                    <option value="booking on 20% down payment">Booking on 20% Down Payment</option>
                                    <option value="booking on 20% token money">Booking on Token Money</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Token Money/Down Payment Recived Rs.:</label>
                                <select type="text" class="form-control" name="apartment_downpayment">
                                    <option value="cash">Cash</option>
                                    <option value="check / DD">Check / DD</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Payment Slip / Screenshot:</label>
                                <input type="file" class="form-control" name="apartment_payment_prove_image">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Drawn On:</label>
                                <input type="text" class="form-control" name="apartment_payment_drawn_on">
                            </div>
                        </div>

                        <div class="col-md-12 mt-4 text-center">
                            <hr>

                            <button class="btn btn-success btn-lg">Add to Record</button>
                        </div>





                    </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
