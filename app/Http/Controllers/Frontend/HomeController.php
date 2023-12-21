<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $jobs = Job::when($request->search, function ($query) use ($request) {
            return $query->where('title', 'like', "%{$request->search}%");
        })->latest()->get();

        return view('frontend.home', compact('jobs'));
    }
}
