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
                            'name',
                            'description',
                            'model',
                            'status',
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
                            'register_id',
                            'supplier_id',
                            'condition_status_id',
                            'utilization_id',
                            'status_id',
                            ];

    /**
     * Get the Tenant record associated with the location.
     */
    public function tenant()
    {
        return $this->hasOne('App\Models\Tenant', 'id', 'tenant_id');
    }
}
