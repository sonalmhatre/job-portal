@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Job ') }}</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->
                    <form class="form-horizontal" method="POST" action="{{ route('job.create') }}" enctype="multipart/form-data">
                        @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example1">name</label>
                            <input type="text" id="form6Example1" class="form-control" name="name"/>
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        </div>
                        
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example1">Email</label>
                            <input type="text" id="form6Example1" class="form-control" name="email"/>
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        </div>
                        
                    </div>
                    
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example3">Qualification</label>
                        <input type="text" id="form6Example3" class="form-control" name="qualification"/>
                        <span class="text-danger">{{ $errors->first('qualification') }}</span>
                        
                    </div>

                   
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example4">Location</label>
                        <input type="text" id="form6Example4" class="form-control"  name="location"/>
                        <span class="text-danger">{{ $errors->first('location') }}</span>
                    </div>
                    
                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form6Example6">Phone</label>
                        <input type="number" id="form6Example6" class="form-control" name="phone"/>
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                        
                    </div>
                    
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example5">Total Experience</label>
                        <input type="text" id="form6Example5" class="form-control" name="total_experience" />
                        <span class="text-danger">{{ $errors->first('total_experience') }}</span>
                    </div>
                    
                    
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example5">Job role</label>
                        <select class="form-label" name="job_role">
                            <option value="">Select Role</option>
                            <option value="backend developer">Backend Developer</option>
                            <option value="frontend developer">Frontend Developer</option>
                           
                        </select>
                        <span class="text-danger">{{ $errors->first('job_role') }}</span>
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example5">Upload Resume</label>
                        <input type="file" id="form6Example5" class="form-control" name="resume"/>
                        <span class="text-danger">{{ $errors->first('resume') }}</span>
                    </div>

                    <!-- Message input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example7">About</label>
                        <textarea class="form-control" id="form6Example7" rows="4" name="about"></textarea>
                    </div>

                    

                    <!-- Submit button -->
                    <button data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection