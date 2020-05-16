<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'company', 'province', 'publication_date', 'expiration_date', 'description', 'email', 'photo'
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'category_jobs');
    }
}
