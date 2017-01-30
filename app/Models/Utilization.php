<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilization extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'utilization';

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
    protected $fillable = ['name', 'code', 'color'];
}
