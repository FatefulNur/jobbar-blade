<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobDetailsController extends Controller
{
    public function __invoke(Request $request, Job $job)
    {
        return view('frontend.job-details', compact('job'));
    }
}
