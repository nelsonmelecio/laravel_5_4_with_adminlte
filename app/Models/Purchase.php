<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'purchases';

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
    protected $fillable = [ 'equipment_id',
                            'purchase_no',
                            'purchase_cost',
                            'purchase_date',
                            'warranty_start',
                            'warranty_expire',
                            'date_commissioned',
                            ];
}
