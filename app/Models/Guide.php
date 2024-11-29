<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Guide
 *
 * @property $id
 * @property $name
 * @property $expertise
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Guide extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'expertise', 'email'];


}
