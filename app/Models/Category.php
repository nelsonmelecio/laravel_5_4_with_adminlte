<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';

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
    protected $fillable = [ 
                            'description',
                            'critical_id',
                            'classification_id',
                            'frequency_id',
                            'risk_is',
                            'life_service',
                            'asset_definition',
                            'proficiency_id',
                            'ecri_code',
                            'tenant_id',
                            ];

    /**
     * Get the Tenant record associated with the location.
     */
    public function tenant()
    {
        return $this->hasOne('App\Models\Tenant', 'id', 'tenant_id');
    }

    /**
     * Get the proficiency record associated with the location.
     */
    public function proficiency()
    {
        return $this->hasOne('App\Models\Proficiency', 'id', 'proficiency_id');
    }

    /**
     * Get the risk record associated with the location.
     */
    public function Risk()
    {
        return $this->hasOne('App\Models\Risk', 'id', 'risk_id');
    }


    /**
     * Get the frequency record associated with the location.
     */
    public function frequency()
    {
        return $this->hasOne('App\Models\Frequency', 'id', 'frequency_id');
    }

    /**
     * Get the classification record associated with the location.
     */
    public function classification()
    {
        return $this->hasOne('App\Models\Classification', 'id', 'classification_id');
    }

    /**
     * Get the critical record associated with the location.
     */
    public function critical()
    {
        return $this->hasOne('App\Models\Critical', 'id', 'critical_id');
    }


}
