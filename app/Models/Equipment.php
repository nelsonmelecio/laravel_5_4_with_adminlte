<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'equipments';

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
    protected $fillable = [ 'id',
                            'equipment_name',
                            'equipment_description',
                            'model',
                            // 'status', // redundant to status_id
                            'barcode',
                            'serial_number',
                            'asset_number',
                            'service_group',
                            'required_pm',
                            'service_provider',
                            'availability',
                            'department_id',
                            'frequency_id',
                            'location_id',
                            'manufacturer_id',
                            'category_id',
                            'supplier_id',
                            'condition_status_id',
                            'utilization_id',
                            'status_id',
                            'tenant_id', // orig register_id -> change to tenant_id
                            ];

    /**
     * Get the Tenant record associated with the location.
     */
    public function tenant()
    {
        return $this->hasOne('App\Models\Tenant', 'id', 'tenant_id');
    }

    /**
     * Get the Tenant record associated with the location.
     */
    public function status()
    {
        return $this->hasOne('App\Models\Status', 'id', 'status_id');
    }

    
    // /**
    //  * Get the proficiency record associated with the location.
    //  */
    // public function proficiency()
    // {
    //     return $this->hasOne('App\Models\Proficiency', 'id', 'proficiency_id');
    // }

    // /**
    //  * Get the risk record associated with the location.
    //  */
    // public function Risk()
    // {
    //     return $this->hasOne('App\Models\Risk', 'id', 'risk_id');
    // }


    // /**
    //  * Get the frequency record associated with the location.
    //  */
    // public function frequency()
    // {
    //     return $this->hasOne('App\Models\Frequency', 'id', 'frequency_id');
    // }

    // /**
    //  * Get the classification record associated with the location.
    //  */
    // public function classification()
    // {
    //     return $this->hasOne('App\Models\Classification', 'id', 'classification_id');
    // }

    // /**
    //  * Get the critical record associated with the location.
    //  */
    // public function critical()
    // {
    //     return $this->hasOne('App\Models\Critical', 'id', 'critical_id');
    // }

}
