<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function jobs()
    {
        return $this->belongsToMany('App\Models\Job', 'category_jobs');
    }
}
