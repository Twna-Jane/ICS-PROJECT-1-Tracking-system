<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Cargo
 *
 * @property $id
 * @property $awbno
 * @property $from
 * @property $to
 * @property $weight
 * @property $pieces
 * @property $created_at
 * @property $updated_at
 *
 * @property TrackedCargo[] $trackedCargos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cargo extends Model
{
    use HasFactory;
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['awbno', 'from', 'to', 'weight', 'pieces'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trackedCargos()
    {
        return $this->hasMany(\App\Models\TrackedCargo::class, 'awbno', 'awbno');
    }
    
}
