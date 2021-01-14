<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Models\Vacancy;
use App\Models\Post_Internship;
use Illuminate\Http\Request;

class PostInternshipController extends Controller
{
    //
    public  function vacancyList()
    {
        $list=Post_Internship::all();

        return view('backend.contents.InternshipList',compact('list'));
    }
    public  function changeStatus(Request $request)
    {




        $changeStatus=Post_Internship::where('id','=',$request->id)->first();
        $changeStatus->update([
            'change_status' => $request->status
        ]);

        return redirect()->back();
    }

}
