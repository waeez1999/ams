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
            $table->string('c_image')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('applicant_guardian')->nullable();
            $table->string('applicant_cnic_number')->nullable();
            $table->string('applicant_cnic_image')->nullable();
            $table->string('applicant_passport_number')->nullable();
            $table->string('applicant_passport_image')->nullable();
            $table->string('applicant_mailing_address')->nullable();
            $table->string('applicant_district')->nullable();
            $table->string('applicant_city')->nullable();
            $table->string('applicant_country')->nullable();
            $table->string('applicant_email')->nullable();
            $table->string('applicant_phone_number')->nullable();
            $table->string('applicant_mobile_number')->nullable();
            $table->string('applicant_office_number')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('nominee_cnic_number')->nullable();
            $table->string('nominee_cnic_image')->nullable();
            $table->string('nominee_passport_number')->nullable();
            $table->string('nominee_passport_image')->nullable();
            $table->string('nominee_guardian')->nullable();
            $table->string('nominee_relation_with_applicant')->nullable();
            $table->string('nominee_mailing_address')->nullable();
            $table->string('nominee_district')->nullable();
            $table->string('nominee_city')->nullable();
            $table->string('nominee_country')->nullable();
            $table->string('nominee_email')->nullable();
            $table->string('nominee_phone_number')->nullable();
            $table->string('nominee_mobile_number')->nullable();
            $table->string('nominee_office_number')->nullable();
            $table->string('apartment_number')->nullable();
            $table->string('apartment_size')->nullable();
            $table->string('apartment_floor')->nullable();
            $table->string('apartment_total_price')->nullable();
            $table->string('apartment_discount')->nullable();
            $table->string('apartment_net_price')->nullable();
            $table->string('apartment_payment_plan')->nullable();
            $table->string('apartment_downpayment')->nullable();
            $table->string('apartment_payment_prove_image')->nullable();
            $table->string('apartment_payment_drawn_on')->nullable();
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
