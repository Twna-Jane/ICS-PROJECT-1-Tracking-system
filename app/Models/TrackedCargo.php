<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrackedCargo
 *
 * @property $id
 * @property $awbno
 * @property $flight
 * @property $status
 * @property $location
 * @property $created_at
 * @property $updated_at
 *
 * @property Cargo $cargo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TrackedCargo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['awbno', 'flight', 'status', 'location'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cargo()
    {
        return $this->belongsTo(\App\Models\Cargo::class, 'awbno', 'awbno');
    }
    
}
