<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'location';

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
                            'name',
                            'building_name',
                            'block_number',
                            'building_number',
                            'floor_number',
                            'room_number',
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
