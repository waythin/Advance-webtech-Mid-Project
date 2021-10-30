<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function job_list(){
        $jobs = Job::all();
        return view('job.job_list')->with('jobs', $jobs);
    }
}
