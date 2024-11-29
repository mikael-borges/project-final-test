<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Explorer
 *
 * @property $id
 * @property $name
 * @property $identification
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Explorer extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'identification', 'email'];


}
