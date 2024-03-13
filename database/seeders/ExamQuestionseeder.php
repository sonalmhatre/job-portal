<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ExamQuestionseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = date('y-m-d h:i:s');
        $data =[[
            'question' => 'What is the use of .env file in Laravel?',
            'answers' => json_encode(['Setting Up local Environment variable','Optimization','Hosting','None of these']),
            'correct_answer' => 'Setting Up local Environment variable',
            'job_role' => 'backend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'Command to start Laravel Application?',
            'answers' => json_encode(['php artisan new','php artisan','php artisan start','php artisan serve']),
            'correct_answer' => 'php artisan serve',
            'job_role' => 'backend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'By default laravel project runs on which PORT?',
            'answers' => json_encode(['3000','8000','4000','2000']),
            'correct_answer' => '8000',
            'job_role' => 'backend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'In which file we can set database connections?',
            'answers' => json_encode(['database.php file','config.php file','.env file','None of these']),
            'correct_answer' => '.env file',
            'job_role' => 'backend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'Can laravel application support caching?',
            'answers' => json_encode(['Yes','No','may be','None of these']),
            'correct_answer' => 'Yes',
            'job_role' => 'backend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'Full form of ORM in laravel?',
            'answers' => json_encode(['Object Relation Mapping','Object Relation Master','Object Relation Manager','None of these']),
            'correct_answer' => 'Object Relation Mapping',
            'job_role' => 'backend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'where is located .env file in Laravel?',
            'answers' => json_encode(['app','config','root','None of these']),
            'correct_answer' => 'root',
            'job_role' => 'backend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'Laravel is based on which design pattern?',
            'answers' => json_encode(['Singleton Design Pattern','MVC','Factory Design pattern','Observer pattern']),
            'correct_answer' => 'MVC',
            'job_role' => 'backend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'HTML stand for?',
            'answers' => json_encode(['Hypermark Language','Hypermix language','Hypertext Markup Language',' Hypertension Language']),
            'correct_answer' => 'Hypertext Markup Language',
            'job_role' => 'frontend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'Which attribute set the text direction?',
            'answers' => json_encode(['dir','lang','direction','sub']),
            'correct_answer' => 'dir',
            'job_role' => 'frontend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'Tick the attribute of form tag?',
            'answers' => json_encode(['Action','Method','Both A and B','None of the above']),
            'correct_answer' => 'Both A and ',
            'job_role' => 'frontend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'What is Git?',
            'answers' => json_encode(['It tracks the changes made into the file',' It changes the content of the file','It is just a dependency an Ember.js uses','None of these']),
            'correct_answer' => 'None of the above',
            'job_role' => 'frontend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'What is the default scope in Node.js application?',
            'answers' => json_encode(['Global','Local','Global Function',' Local to object']),
            'correct_answer' => 'Global',
            'job_role' => 'frontend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'What npm stands for?',
            'answers' => json_encode(['Node Package Manager','Node Project Manager','New Project Managerr','New Package Manager']),
            'correct_answer' => 'Node Package Manager',
            'job_role' => 'frontend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'What is the smallest header in HTML by default?',
            'answers' => json_encode(['h1','h2','h6','h4']),
            'correct_answer' => 'h6',
            'job_role' => 'frontend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ],[
            'question' => 'What are the types of lists available in HTML?',
            'answers' => json_encode(['Ordered, Unordered Lists.','Bulleted, Numbered Lists.','Named, Unnamed Lists','None of the above']),
            'correct_answer' => 'Ordered, Unordered Lists.',
            'job_role' => 'frontend developer',
            'created_at'=>$date,
            'updated_at'=>$date
        ]
        
        
     ];
        DB::table('question_answer_table')->insert($data);
    }
}
