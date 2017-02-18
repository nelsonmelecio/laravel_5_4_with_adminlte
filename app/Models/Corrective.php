<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Corrective extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'corrective';

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
                            'equipment_id',     // tbl:equipments
                            'work_order_code',
                            'work_order_date',
                            'work_order_time',
                            'work_type_id',     //tbl:work_type
                            'work_status_id',   //tbl:work_status
                            'department_id',    //tbl:department
                            'request_code',
                            'request_date',
                            'request_time',
                            'request_type_id',  //tbl:request_type
                            'request_id',
                            'status_id',        //tbl:status
                            'target_date',
                            'request_details',
                            'tenant_id',        //tbl:tenant
                            'condition_id',     //tbl:condition
                            'utilization_id',   //tbl:utilization
                            'observation',  
                            'reported',
                            'remarks',
                            'SysAid Number'
                            ];

    /**
     * Get the Tenant record associated with the location.
     */
    public function equipment()
    {
        return $this->hasOne('App\Models\Equipment', 'id', 'equipment_id');
    }

    /**
     * Get the Tenant record associated with the location.
     */
    public function work_type()
    {
        return $this->hasOne('App\Models\WorkType', 'id', 'work_type_id');
    }

    /**
     * Get the Tenant record associated with the location.
     */
    public function work_status()
    {
        return $this->hasOne('App\Models\WorkStatus', 'id', 'work_status_id');
    }

    /**
     * Get the Tenant record associated with the location.
     */
    public function request_type()
    {
        return $this->hasOne('App\Models\RequestType', 'id', 'request_type_id');
    }

    /**
     * Get the Tenant record associated with the location.
     */
    public function status()
    {
        return $this->hasOne('App\Models\Status', 'id', 'status_id');
    }

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
    public function condition()
    {
        return $this->hasOne('App\Models\Condition', 'id', 'condition_id');
    }

    /**
     * Get the Tenant record associated with the location.
     */
    public function utilization()
    {
        return $this->hasOne('App\Models\Utilization', 'id', 'utilization_id');
    }





}
