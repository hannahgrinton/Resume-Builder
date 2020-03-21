<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\ResumeItem;
use App\Resume;
use App\ResumeRelations;

class ManagerController extends Controller
{
    //resume manager controller

    /**
     * Show all the resume items
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        
        $data['resume-items'] = DB::table('resume_items')->get();
        $data['skills'] = DB::table('resume_items')->where('category', "1")->get();
        $data['education'] = DB::table('resume_items')->where('category', "3")->get();
        $data['work'] = DB::table('resume_items')->where('category', "2")->get();
        $data['other'] = DB::table('resume_items')->where('category', "4")->get();

        return view('manager.index', ['data' => $data]);
    }
    /**
     * Edit resume item form-page
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id) {
        $data['item'] = DB::table('resume_items')->where('itemId', $id)->first();
        return view('manager.edit', ['data' => $data]);
    }
    public function editSubmit($id) {
        $item = ResumeItem::find($id);
        $item->name = request('name');
        $item->description = request('description');
        $item->category = request('category');
        $item->save();
        return redirect('manager');
    }

}
