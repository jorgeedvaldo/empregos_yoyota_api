<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Exception;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::orderByRaw('id DESC')->get();
        $categories = Category::orderBy('name')->get();
        return view('jobs', compact('jobs', 'categories'));
    }

    public function getById($id)
    {
        try
        {
            $job = Job::with('categories')->where('id', $id)->get()[0];
            $categories = Category::orderBy('name')->get();
            return view('job', compact('job', 'categories'));
        }
        catch(Exception $ex)
        {
            abort(404);
        }
    }

    public function getByCategoryId($id)
    {
        try
        {
            $categories = Category::orderBy('name')->get();
            $category = Category::with('jobs')->where('id', $id)->first();
            $categoryJobs = $category->jobs;
            return view('category', compact('category', 'categoryJobs', 'categories'));
        }
        catch(Exception $ex)
        {
            abort(404);
        }

    }
}
