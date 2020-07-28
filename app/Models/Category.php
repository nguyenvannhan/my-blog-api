<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    /** Relationship n -n */
    public function posts() {
        return $this->belongsToMany('App\Models\Post');
    }
}
