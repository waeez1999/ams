<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('c_image');
            $table->string('applicant_name');
            $table->string('applicant_guardian');
            $table->string('applicant_cnic_number');
            $table->string('applicant_cnic_image');
            $table->string('applicant_passport_number');
            $table->string('applicant_passport_image');
            $table->string('applicant_mailing_address');
            $table->string('applicant_district');
            $table->string('applicant_city');
            $table->string('applicant_country');
            $table->string('applicant_email');
            $table->string('applicant_phone_number');
            $table->string('applicant_mobile_number');
            $table->string('applicant_office_number');
            $table->string('nominee_name');
            $table->string('nominee_cnic_number');
            $table->string('nominee_cnic_image');
            $table->string('nominee_passport_number');
            $table->string('nominee_passport_image');
            $table->string('nominee_guardian');
            $table->string('nominee_relation_with_applicant');
            $table->string('nominee_mailing_address');
            $table->string('nominee_district');
            $table->string('nominee_city');
            $table->string('nominee_country');
            $table->string('nominee_email');
            $table->string('nominee_phone_number');
            $table->string('nominee_mobile_number');
            $table->string('nominee_office_number');
            $table->string('apartment_number');
            $table->string('apartment_size');
            $table->string('apartment_floor');
            $table->string('apartment_total_price');
            $table->string('apartment_discount');
            $table->string('apartment_net_price');
            $table->string('apartment_payment_plan');
            $table->string('apartment_downpayment');
            $table->string('apartment_payment_prove_image');
            $table->string('apartment_payment_drawn_on');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
