<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index(){
        return "All Applicants";
    }

    public function create(){
        return view('application.create');
    }

    public function store(Request $request){

        $application = new Application;

        // DB Fields

        $application->applicant_name = $request->input('applicant_name');
        $application->applicant_guardian = $request->input('applicant_guardian');

        if($request->hasFile('c_image')){
            $file = $request->file('c_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/client_picture', $filename);
            $application->c_image = $request->input('c_image');
        }
        $application->applicant_cnic_number = $request->input('applicant_cnic_number');


        $application->applicant_cnic_image = $request->input('applicant_cnic_image');
        $application->applicant_passport_number = $request->input('applicant_passport_number');


        $application->applicant_passport_image = $request->input('applicant_passport_image');
        $application->applicant_mailing_address = $request->input('applicant_mailing_address');
        $application->applicant_district = $request->input('applicant_district');
        $application->applicant_city = $request->input('applicant_city');
        $application->applicant_country = $request->input('applicant_country');
        $application->applicant_email = $request->input('applicant_email');
        $application->applicant_phone_number = $request->input('applicant_phone_number');
        $application->applicant_mobile_number = $request->input('applicant_mobile_number');
        $application->applicant_office_number = $request->input('applicant_office_number');
        $application->nominee_name = $request->input('nominee_name');
        $application->nominee_guardian = $request->input('nominee_guardian');
        $application->nominee_relation_with_applicant = $request->input('nominee_relation_with_applicant');
        $application->nominee_cnic_number = $request->input('nominee_cnic_number');


        $application->nominee_cnic_image = $request->input('nominee_cnic_image');
        $application->nominee_passport_number = $request->input('nominee_passport_number');


        $application->nominee_passport_image = $request->input('nominee_passport_image');
        $application->nominee_mailing_address = $request->input('nominee_mailing_address');
        $application->nominee_district = $request->input('nominee_district');
        $application->nominee_city = $request->input('nominee_city');
        $application->nominee_email = $request->input('nominee_email');
        $application->nominee_phone_number = $request->input('nominee_phone_number');
        $application->nominee_mobile_number = $request->input('nominee_mobile_number');
        $application->nominee_office_number = $request->input('nominee_office_number');
        $application->apartment_number = $request->input('apartment_number');
        $application->apartment_size = $request->input('apartment_size');
        $application->apartment_floor = $request->input('apartment_floor');
        $application->apartment_total_price = $request->input('apartment_total_price');
        $application->apartment_discount = $request->input('apartment_discount');
        $application->apartment_net_price = $request->input('apartment_net_price');
        $application->apartment_payment_plan = $request->input('apartment_payment_plan');
        $application->apartment_downpayment = $request->input('apartment_downpayment');


        $application->apartment_payment_prove_image = $request->input('apartment_payment_prove_image');
        $application->apartment_payment_drawn_on = $request->input('apartment_payment_drawn_on');

        return view('application.create');
    }
}
