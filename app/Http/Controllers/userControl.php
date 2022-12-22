<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class userControl extends Controller
{
    function listOut(){
        $output= Project::all();
        return view('supervisor.projectlist', ['list'=>$output]);
    }
    function showStud($id){
        $output=Project::find($id);
        return view('supervisor.updateproject', ['disp'=>$output]);
    }

    function update(Request $req){

        $output=Project::find($req->studentID);
        $output->studentID=$req->input('studentID');
        $output->projectTitle=$req->input('projectTitle');
        $output->projectType=$req->input('projectType');
        $output->studentName=$req->input('studentName');
        $output->supervisor=$req->input('supervisor');
        $output->examiner1=$req->input('examiner1');
        $output->examiner2=$req->input('examiner2');
        $output->startDate=$req->input('startDate');
        $output->endDate=$req->input('endDate');
        $output->duration=$req->input('duration');
        $output->progress=$req->input('progress');
        $output->status=$req->input('status');

        $output->save();
        return redirect('list');
    }
}
