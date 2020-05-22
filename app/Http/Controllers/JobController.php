<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::get();
        $categories = Category::get();
        return view('jobs', compact('jobs', 'categories'));
    }

    public function getById($id)
    {
        $job = Job::with('categories')->where('id', $id)->get()->first();
        $categories = Category::get();
        return view('job', compact('job', 'categories'));
    }
}
