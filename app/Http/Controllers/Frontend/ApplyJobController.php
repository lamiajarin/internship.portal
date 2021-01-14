<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplyCandidate;
use App\Models\Post_Internship;
use App\Models\User;
use Illuminate\Http\Request;

class ApplyJobController extends Controller
{
    //
    public function JobApply(Request $request, $id)
    {
        $apply = ApplyCandidate::where('user_id', auth()->user()->id)->where('internship_id', $id)->first();//one post use
        if ($apply == null) {
            $apply_list = Post_Internship::find($id);
            ApplyCandidate::create([
                'user_id' => auth()->user()->id,
                'internship_id' => $apply_list->id,
                'profile_id' => $request->user_id
            ]);
            //done
            return redirect()->back()->with('message','Applied done');
        } else {
//already
            return redirect()->back()->with('message','You already Applied ');
        }

    }

    public function JobApplyCandidate()
    {

        $candidate_list = ApplyCandidate::with(['user.profile', 'user', 'internship', 'employee', 'action'])->get();
        return view('frontend.employee.candidate_list', compact('candidate_list'));

    }

    public function view_resume($id)
    {
        $users = User::find($id);
        return view('frontend.candidate.view_resume', compact('users'));

    }

    public function ApplicationDetails($id)
    {

        $post_id =ApplyCandidate::with(['internship', 'employee'])->find($id);


        return view('frontend.employee.application_details', compact('post_id'));

    }

//    public function Action($id)
//    {
//        $action_id = TakeAction::find($id);
//        return view('frontend.employee.application_details', compact('action_id'));
//    }

    //action_submit

    public function TakeAction(Request $request)
    {

        $applyC = ApplyCandidate::findOrFail($request->id);//hidden id //find or take a good ans
        $applyC->update([
            'status' => $request->status,
            'message' => $request->message
        ]);


        return redirect()->route('application_details',$request->id);
    }


    public function AppliedJob()
    {

        $appliedJobs = ApplyCandidate::all();

        return view('frontend.candidate.applied_internship', compact('appliedJobs'));
    }
    public function AppliedJobDetails($id)
    {
        $appliedJobs = ApplyCandidate::with(['internship', 'employee'])->where('internship_id',$id)->get();
        return view('frontend.candidate.applied_internship_details', compact('appliedJobs'));
    }

}
