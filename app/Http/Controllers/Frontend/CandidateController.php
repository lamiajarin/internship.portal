<?php

namespace App\Http\Controllers\Frontend;

use App;
use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Exprence;
use App\Models\Jpb_Short_List;
use App\Models\Personal_Details;
use App\Models\Post_Internship;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Training;
use App\Models\User;
use App\Models\Work_Sample;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    //candidate
    public function candidate()
    {
        return view('frontend.candidate.candidate_home');
    }

    public function Edit_Resume()
    {
        $profileCheck = Personal_Details::where('user_id', auth()->user()->id)->first();
        $educationCheck = Education::where('user_id', auth()->user()->id)->first();
//        dd($profileCheck);
        $trainingCheck = Training::where('user_id', auth()->user()->id)->first();
        $projectCheck = Project::where('user_id', auth()->user()->id)->first();
        $skillCheck = Skill::where('user_id', auth()->user()->id)->first();
        $sampleCheck = Work_Sample::where('user_id', auth()->user()->id)->first();
        $experienceCheck = Exprence::where('user_id', auth()->user()->id)->first();
        return view('frontend/candidate/edit_resume', compact('profileCheck', 'educationCheck', 'trainingCheck', 'projectCheck', 'skillCheck', 'sampleCheck', 'experienceCheck'));
    }

    public function candidate_profile()
    {
//        dd('hi');
        $profile = User::with('profile')->find(auth()->user()->id);

        return view('frontend.candidate.candidate_profile', compact('profile'));
    }

    public function candidate_profile_post(Request $request)
    {

        $file_name = '';
        if ($request->hasFile('resume')) {
            $resume = $request->file('resume');
            $file_name = date('Ymdhms') . '.' . $resume->getClientOriginalExtension();
            $resume->storeAs('users', $file_name);
        }
//        $data['user_id'] = ;
        Personal_Details::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'ccity' => $request->input('ccity'),
            'pcity' => $request->input('pcity'),
            'resume' => $file_name,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->route('candidate_profile')->with('message', 'Thank you for
        your Details');
    }

    public function candidate_profile_edit($id)
    {
        $profile = Personal_Details::where('user_id', $id)->first();
        return view('frontend.candidate.candidate_profile_edit', compact('profile'));
    }

    public function candidate_profile_update(Request $request, $id)
    {

        $profile = Personal_Details::where('user_id', $id)->first();

        $data = [
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'ccity' => $request->input('ccity'),
            'pcity' => $request->input('pcity'),
            'user_id' => auth()->user()->id
        ];
        if ($request->hasFile('resume')) {

            $resume = $request->file('resume');
            $file_name = date('Ymdhms') . '.' . $resume->getClientOriginalExtension();
            $resume->storeAs('users', $resume);

            $data['resume'] = $file_name;

        }

        $profile->update($data);
        return redirect()->route('view_resume', $id);
    }


    public function candidate_education()
    {
        $educations = Education::all();
        $education = User::with('education')->find(auth()->user()->id);

        return view('frontend.candidate.education_details', [
            'educations' => $educations
        ], compact('education'));
    }

    public function candidate_education_post(Request $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        //if input field name and column name are same
        Education::create($data);
        return redirect()->route('candidate_education')->with('message', 'Thank you for
        the Details');
    }

    public function candidate_education_edit($id)
    {
        $education = Education::find($id);
        return view('frontend.candidate.candidate_education_edit', compact('education'));
    }

    public function candidate_education_delete($id)
    {

        $education = Education::find($id);
        if (!empty($education)) {
            $education->delete();
            return redirect()->route('candidate_education');
        }

    }

    public function candidate_experience()
    {
        $experiences = Exprence::all();
        return view('frontend.candidate.candidate_experience', [
            'educations' => $experiences
        ]);
    }

    public function candidate_experience_post(Request $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        //if input field name and column name are same
        Exprence::create($data);
        return redirect()->route('candidate_experience')->with('message', 'Thank you for
        your Details');
    }

//delete
    public function candidate_experience_delete($id)
    {

        $experience = Exprence::find($id);
        if (!empty($experience)) {
            $experience->delete();
            return redirect()->route('candidate_experience');
        }

    }

    public function candidate_skill()
    {

        $skills = Skill::all();
        $skill = User::with('skill')->find(auth()->user()->id);
        return view('frontend.candidate.candidate_skill', [
            'skills' => $skills
        ], compact('skill'));
    }

//post
    public function candidate_skill_post(Request $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        //if input field name and column name are same
        Skill::create($data);
        return redirect()->route('candidate_skill')->with('message', 'Thank you for
        your Details');
    }

//delete
    public function candidate_skill_delete($id)
    {

        $skill = skill::find($id);
        if (!empty($skill)) {
            $skill->delete();
            return redirect()->back();
        }

    }

//get
    public function candidate_sample()
    {
        $sample = Work_Sample::all();
        $work_sample = User::with('work_sample')->find(auth()->user()->id);

        return view('frontend.candidate.candidate_work_sample', [
            'sample' => $sample
        ], compact('work_sample'));


    }

//post
    public function candidate_sample_post(Request $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        //if input field name and column name are same
        Work_Sample::create($data);
        return redirect()->route('candidate_sample')->with('message', 'Thank you for
        your Details');
    }

//sample_delete
    public function candidate_sample_delete($id)
    {

        $sample = Work_Sample::find($id);
        if (!empty($sample)) {
            $sample->delete();
            return redirect()->route('candidate_sample');
        }

    }

//get
    public function candidate_training()
    {
        $trainings = Training::all();
        $training = User::with('training')->find(auth()->user()->id);

        return view('frontend.candidate.candidate_training', [
            'trainings' => $trainings
        ], compact('training'));

    }

//post
    public function candidate_training_post(Request $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        //if input field name and column name are same
        Training::create($data);
        return redirect()->route('candidate_training')->with('message', 'Thank you for
        your Details');
    }

    public function candidate_training_delete($id)
    {

        $training = Training::find($id);
        if (!empty($training)) {
            $training->delete();
            return redirect()->route('candidate_training');
        }

    }

    //get
    public function candidate_project()
    {
        $projects = Project::all();
        $project = User::with('project')->find(auth()->user()->id);

        return view('frontend.candidate.candidate_project', [
            'projects' => $projects
        ], compact('project'));

    }

//post
    public function candidate_project_post(Request $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        //if input field name and column name are same
        Project::create($data);
        return redirect()->route('candidate_project')->with('message', 'Thank you for
        your Details');
    }

    public function CandidateProjectDelete($id)
    {

        $project = Project::find($id);
        if (!empty($project)) {
            $project->delete();
            return redirect()->route('candidate_project');
        }

    }

    //get_job_short_list
    public function job_short_list($id)
    {
        $job = Jpb_Short_List::where('user_id', auth()->user()->id)->where('internship_id', $id)->first();//one post use

        if ($job == null) {
            $job_list = Post_Internship::find($id);

            Jpb_Short_List::create([
                'user_id' => auth()->user()->id,
                'internship_id' => $job_list->id,
            ]);
            //done
            return redirect()->back();
        } else {
//already
            return redirect()->back();
        }

    }

    public function job_short_list_view()
    {
        $current_user_id = auth()->user()->id;
        $list_view = Jpb_Short_List::with(['user', 'internship'])->where('user_id', '=', $current_user_id)->get();

        return view('frontend.candidate.job_short_list', compact('list_view'));

    }

    //pdf
    public function pdf()
    {

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('frontend.candidate.resume_print');
        return $pdf->stream();
    }

}
