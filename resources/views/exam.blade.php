@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Exam Question ') }}</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    {{ __('You are logged in!') }} -->
                    <form class="form-horizontal" method="POST" action="{{ route('storeexam') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="job_role" value="{{$role}}">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    @forelse($questions as $key=>$question)
                    <div class="row mb-4">
                        <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form6Example1">{{$question->question}}</label>
                        
                            @foreach(json_decode($question->answers) as $key1 => $option)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="{{$question->id}}" id="{{$option}}" value="{{$option}}" @if(!empty($question->candidate_answers) && $option == $question->candidate_answers ) checked @endif>
                                <label class="form-check-label" for="{{$option}}">
                                    {{$option}}
                                </label>
                                </div>
                                <!-- <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                                </div> -->
                            @endforeach
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        </div>
                        
                    </div>
                    @empty
                    @endforelse
                    

                    <!-- Submit button -->
                    <button data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection