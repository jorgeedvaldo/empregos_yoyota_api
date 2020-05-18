<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Job;

class JobController extends Controller
{
    public function get()
    {
        $data = Job::with('categories')->get();
        $license = 'This API was developed by Edivaldo Jorge (https://github.com/jorgeedvaldo)';
        $message = 'Operation performed successfully.';
        return response()->json(
            [
                'message' => $message,
                'data' => $data,
                'license' => $license
            ]);
    }

    public function getById($id)
    {
        $data = Job::with('categories')->where('id', $id)->get();
        $license = 'This API was developed by Edivaldo Jorge (https://github.com/jorgeedvaldo)';
        $message = 'Operation performed successfully.';
        return response()->json(
            [
                'message' => $message,
                'data' => $data,
                'license' => $license
            ]);
    }
}
