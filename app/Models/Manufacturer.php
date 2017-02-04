<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'manufacturers';

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
                            'contact_person',
                            'company_address',
                            'province',
                            'zipcode',
                            'phone_number1',
                            'phone_number2',
                            'fax_number',
                            'mobile_number1',
                            'mobile_number2',
                            'web_addess',
                            'country',
                            'tenant_id',
                            ];

    /**
     * Get the Tenant record associated with the location.
     */
    public function tenant()
    {
        return $this->hasOne('App\Models\Tenant', 'id', 'tenant_id');
    }
}
