<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Artifact
 *
 * @property $id
 * @property $name
 * @property $discovery_time
 * @property $code
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Artifact extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'discovery_time', 'code'];


}
