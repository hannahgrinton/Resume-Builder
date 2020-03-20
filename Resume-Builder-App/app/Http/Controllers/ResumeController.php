<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\Validator;
use App\ResumeItem;

class ResumeController extends Controller
{
    //resume item controller

    /**
     * Show the resume items
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        
        $data['resume-items'] = DB::table('resume_items')->get();
        $data['skills'] = DB::table('resume_items')->where('category', "1")->get();
        $data['education'] = DB::table('resume_items')->where('category', "3")->get();
        $data['work'] = DB::table('resume_items')->where('category', "2")->get();
        $data['other'] = DB::table('resume_items')->where('category', "4")->get();

        return view('index', ['data' => $data]);
    }
    
    /**
     * Submit new resume
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:300'
        ]);

    }
    /**
     * Store new resume
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store() {
        
    }
    /**
     * Show the new resume
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function resume() {


    }
}
