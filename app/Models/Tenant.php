<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tenant';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'code',
                            'company_name',
                            'business_type',
                            'number_department',
                            'number_equipment',
                            'license_number',
                            'permit_number',
                            'ISO_Number',
                            'phone_number1',
                            'phone_number2',
                            'email',
                            'website',
                            'country',
                            'date_registered',
                            'hospital_code',
                            'fax_number',
                            'mobile_number1',
                            'mobile_number2',
                            ];

}
