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
        $applications = Application::all();
        return view('application.all', compact('applications'));
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
            $application->c_image = $filename;
        }else{
            $application->c_image = '/uploads/default/no-image.png';
        }

        $application->applicant_cnic_number = $request->input('applicant_cnic_number');

        if($request->hasFile('applicant_cnic_image')){
            $file2 = $request->file('applicant_cnic_image');
            $extention2 = $file2->getClientOriginalExtension();
            $filename2 = time().'.'.$extention2;
            $file2->move('uploads/applicant_cnic', $filename2);
            $application->applicant_cnic_image = $filename2;
        }else{
            $application->applicant_cnic_image = '/uploads/default/no-image.png';
        }

        $application->applicant_passport_number = $request->input('applicant_passport_number');



        if($request->hasFile('applicant_passport_image')){
            $file3 = $request->file('applicant_passport_image');
            $extention3 = $file3->getClientOriginalExtension();
            $filename3 = time().'.'.$extention3;
            $file3->move('uploads/applicant_passport', $filename3);
            $application->applicant_passport_image = $filename3;
        }else{
            $application->applicant_passport_image = '/uploads/default/no-image.png';
        }

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

        if($request->hasFile('nominee_cnic_image')){
            $file4 = $request->file('nominee_cnic_image');
            $extention4 = $file4->getClientOriginalExtension();
            $filename4 = time().'.'.$extention4;
            $file4->move('uploads/nominee_cnic', $filename4);
            $application->nominee_cnic_image = $filename4;
        }else{
            $application->nominee_cnic_image = '/uploads/default/no-image.png';
        }

        $application->nominee_passport_number = $request->input('nominee_passport_number');


        if($request->hasFile('nominee_passport_image')){
            $file6 = $request->file('nominee_passport_image');
            $extention6 = $file6->getClientOriginalExtension();
            $filename6 = time().'.'.$extention6;
            $file6->move('uploads/nominee_passport', $filename6);
            $application->nominee_passport_image = $filename6;
        }else{
            $application->nominee_passport_image = '/uploads/default/no-image.png';
        }

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

        if($request->hasFile('apartment_payment_prove_image')){
            $file5 = $request->file('apartment_payment_prove_image');
            $extention5 = $file5->getClientOriginalExtension();
            $filename5 = time().'.'.$extention5;
            $file5->move('uploads/apartment_payment_prove', $filename5);
            $application->apartment_payment_prove_image = $filename5;
        }else{
            $application->apartment_payment_prove_image = '/uploads/default/no-image.png';
        }

        
        $application->apartment_payment_drawn_on = $request->input('apartment_payment_drawn_on');

        $application->save();

        return redirect()->back()->with('status','Record Added Successfully');
    }
}
