<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class adminControl extends Controller
{
    public function show(){
        $Data= Project::all();
        return view('admin.projectlist', ['list'=>$Data]);
    }

    function addData(request $req){

        $Data = new Project();

        $Data->studentID=$req->input('studentID');
        $Data->projectTitle=$req->input('projectTitle');
        $Data->projectType=$req->input('projectType');
        $Data->studentName=$req->input('studentName');
        $Data->supervisor=$req->input('supervisor');
        $Data->examiner1=$req->input('examiner1');
        $Data->examiner2=$req->input('examiner2');
        $Data->startDate=$req->input('startDate');
        $Data->endDate=$req->input('endDate');
        $Data->duration=$req->input('duration');
        $Data->progress=$req->input('progress');
        $Data->status=$req->input('status');

        $Data->save();
        return redirect('projectlist');

    }
}
