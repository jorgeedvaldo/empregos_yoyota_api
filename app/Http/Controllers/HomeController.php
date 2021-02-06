<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = Job::orderByRaw('id DESC')->paginate(3);
        return view('home', compact('jobs'));
    }
}
