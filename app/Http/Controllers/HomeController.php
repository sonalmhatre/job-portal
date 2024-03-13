<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the candidate dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $viewdata = [];
        $correctans =[];
        $viewdata['job'] = Job::where('user_id',Auth::user()->id)->first();
        
        $data =  DB::table('candidate_answer_table')->where('user_id',Auth::user()->id)
                ->get();
        $viewdata['data'] = $data;
        foreach($data as $key=>$value){
            $getquestion = DB::table('question_answer_table')->where('id',$value->question)->first();
            if($value->candidate_answers ==  $getquestion->correct_answer){
                array_push($correctans,$value->candidate_answers);
            }
        }
        if(!empty($viewdata['job'])){
            $getquestion = DB::table('question_answer_table')->where('job_role',$viewdata['job']->job_role)->get();
            $viewdata['total_quesion'] = count($getquestion);
            $viewdata['correct_ans'] = count($correctans);
        }
        return view('home',$viewdata);
    }

    /* dispay exam form */
    public function exam($role){
        $viewdata = [];
        $viewdata['questions'] =  DB::table('question_answer_table')->where('question_answer_table.job_role',$role)->get();
        $viewdata['role'] = $role;
        return view('exam',$viewdata);
    }

     /* store  candidate exanm result */
    public function storeexam(Request $request){
        $data =  $request->except(['_token','job_role']);
        foreach($data as $key =>$value){
            $array =['question'=>$key,'candidate_answers'=>$value,'user_id'=>Auth::user()->id,'job_role'=>$request->job_role];
            $query = DB::table('candidate_answer_table')->insert($array);
        }
        return redirect()->route('home')->with('success', 'Exam completed successfully.');

    }
}
