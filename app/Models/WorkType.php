<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'work_types';

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
    protected $fillable = ['name', 'code'];
}
