<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplyCandidate;
use App\Models\Candidate;
use App\Models\Category;
use App\Models\Post_Internship;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function employee()
    {
        return view('frontend.employee.employee_home');
    }

    public function employee_profile()
    {
        return view('frontend.employee.employee_profile');
    }

    public function employee_profile_post(Request $request)
    {


        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        //if input field name and column name are same
        Profile::updatedOrcreate($data);
        return redirect()->route('employee_profile')->with('message', 'Thank you for
        your Details');
    }

    public function PostJob()
    {
        $categories = Category::select('id', 'category')->get();

        $post_internship = User::with('post_internship')->find(auth()->user()->id);
        return view('frontend.employee.post_internship', compact('post_internship', 'categories'));
    }

    public function PostJob_post(Request $request)
    {


//        dd($request->all());
        $request->validate([
            'category_id' => 'required',
            'internship_title' => 'required|max:30|string',
            'Vacancy' => 'required|numeric|min:1',
            'context' => "required|max:400|string|min:5",
            'responsibility' => 'required|max:400|min:5',
            'status' => 'required|max:20',
            'workplace' => 'required|max:30',
            'requirements' => 'required|max:400|min:3',
            'arequirements' => 'required|max:400|min:3',
            'location' => 'required',
            'salary' => 'required|min:1',
            'dateline' => 'required|date',

        ]);
//


        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        //if input field name and column name are same
        Post_Internship::create($data);

        return redirect()->route('PostJob')->with('message', 'Create Post Successfully');
    }

    public function manage_internship()
    {
        $manage = Post_Internship::orderby('id')->paginate(4);
        $manages = User::with('manage_internship')->find(auth()->user()->id);
        return view('frontend.employee.manage_internship', compact('manage', 'manages'));
    }

    public function ManageInternshipEdit($id)
    {
        $manage = Post_Internship::find($id);
        return view('frontend.employee.manage_internship_edit', compact('manage'));
    }

    public function ManageInternshipUpdate(Request $request, $id)

    {
//        $request->validate([
//            'category' => 'required',
//            'internship_title' => 'required|max:30|string',
//            'Vacancy' => 'required|numeric|min:1',
//            'context'=> "required|max:400|string|min:50",
//            'responsibility' => 'required|max:400|min:50',
//            'status' => 'required|max:20',
//            'workplace' => 'required|max:30',
//            'requirements' => 'required|max:400|min:30',
//            'arequirements' => 'required|max:400|min:30',
//            'location' => 'required',
//            'salary' => 'required|min:1',
//            'dateline' => 'required|date',
//        ]);
        $manage = Post_Internship::find($id);
        $manage->update([
            //if input field name and column name are same
            "category_id" => $request->category,
            "internship_title" => $request->internship_title,
            "Vacancy" => $request->Vacancy,
            "context" => $request->context,
            "responsibility" => $request->responsibility,
            "status" => $request->status,
            "workplace" => $request->workplace,
            "requirements" => $request->requirements,
            "arequirements" => $request->arequirements,
            "location" => $request->location,
            "salary" => $request->salary,
            "dateline" => $request->dateline

        ]);
        return redirect()->route('manage_internship');
    }

    public function ManageInternshipDelete($id)
    {
        $manage = Post_Internship::find($id);
        if (!empty($manage)) {
            $manage->delete();
            $message = " deleted Successfully";
        } else {
            $message = "No data found.";
        }
        return redirect()->back()->with('message', $message);
    }


    public function candidate_list()
    {
        return view('frontend.employee.candidate_list');
    }

    public function shortList()
    {
        $shortLists = ApplyCandidate::where('user_id', auth()->user()->id)->orWhere('status', '=', 'Short Listed')->get();

        return view('frontend.employee.sort_list', compact('shortLists'));
    }

    public function EmployeeReport()
    {
        return view('frontend.employee.report');
    }

}
