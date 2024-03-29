<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use Str;
use Auth;
class JobController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('job-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobRequest $request)
    {
        $data = $request->all();
        if(!empty($data['resume'])){
            
            $imageName = time().'_'.Str::random(15).'.'.$request['resume']->extension();
            
            $data['resume']->move(storage_path('app/public/uploads/resume'), $imageName);
            $data['resume'] = $imageName;
        }
       
        $data['user_id'] = Auth::user()->id;
      
        Job::create($data);
       return redirect()->route('home')->with('success', 'Job Added successfully.');
    }

   
}
