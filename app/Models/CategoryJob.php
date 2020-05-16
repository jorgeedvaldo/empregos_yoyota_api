<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryJob extends Model
{
    protected $fillable = [
        'category_id', 'job_id'
    ];
}
