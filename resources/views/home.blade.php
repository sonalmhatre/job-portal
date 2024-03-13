@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                        @if(empty($job))
                            <a class="btn btn-primary" href="{{ route('job.create') }}">{{ __('Apply Job') }}</a>
                        @endif
                     
                    
                </div>
                <h3>Applied Job</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Job Role</th>
                        <th scope="col">Date</th>
                        <th scope="col">Exam</th>

                        
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                        <th scope="row">1</th>
                        <td> @if(!empty($job->job_role)){{$job->job_role}} @endif</td>
                        <td> @if(!empty($job->created_at)){{date('Y-m-d',strtotime($job->created_at))}} @endif</td>
                        @if(count($data) == 0 && !empty($job->job_role))
                            <td><a class="btn btn-primary" href="{{ route('exam',$job->job_role) }}">{{ __('Start Exam') }}</a></td>
                        @endif
                        </tr>
                       
                    </tbody>
                    </table>
                    @php
                        if(!empty($correct_ans) && !empty($total_quesion))
                            $percentage = ($correct_ans/$total_quesion)*100
                        
                        
                    @endphp
                   
                    @if(!empty($percentage) && $percentage != 0)
                    <div class="alert  @if($percentage > 50)alert-success @else alert-danger @endif" role="alert">
                        @if($percentage > 50)
                        <p>Great news! Congrats on passing your exams. Keep up the excellent work!</p>
                        @else
                        <p>Try Out next time</p>
                        @endif
                    </div>
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection
