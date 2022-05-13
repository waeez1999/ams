<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'applications';
    protected $fillable = [
        'c_image',
        'applicant_name',
        'applicant_guardian',
        'applicant_cnic_number',
        'applicant_cnic_image',
        'applicant_passport_number',
        'applicant_passport_image',
        'applicant_mailing_address',
        'applicant_district',
        'applicant_city',
        'applicant_country',
        'applicant_email',
        'applicant_phone_number',
        'applicant_mobile_number',
        'applicant_office_number',
        'nominee_name',
        'nominee_cnic_number',
        'nominee_cnic_image',
        'nominee_passport_number',
        'nominee_passport_image',
        'nominee_guardian',
        'nominee_relation_with_applicant',
        'nominee_mailing_address',
        'nominee_district',
        'nominee_city',
        'nominee_country',
        'nominee_email',
        'nominee_phone_number',
        'nominee_mobile_number',
        'nominee_office_number',
        'apartment_number',
        'apartment_size',
        'apartment_floor',
        'apartment_total_price',
        'apartment_discount',
        'apartment_net_price',
        'apartment_payment_plan',
        'apartment_downpayment',
        'apartment_payment_prove_image',
        'apartment_payment_drawn_on'
    ];
}
