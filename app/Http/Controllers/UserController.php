<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Personal_Details;
use App\Models\Post_Internship;
use Illuminate\Http\Request;
use Carbon\Carbon;


class UserController extends Controller
{

    public function index()
    {
        $company = Company::count();
        $post_internship = Post_Internship::count();
        $candidate = Personal_Details::count();
        return view("backend.layout.main_content", compact('company', 'post_internship', 'candidate'));
    }

    public function Dashboard()
    {
        $company = Company::count();
        $post_internship = Post_Internship::count();
        $candidate = Personal_Details::count();
        return view("backend.layout.main_content", compact('company', 'post_internship', 'candidate'));
    }

    //
    public function home(Request $request)
    {

        $interns = Post_Internship::whereDate('dateline','<=',Carbon::today()->toDateString())
                                ->where('change_status', '=', 'Approve')->orderby('id', 'desc')->paginate(6);
        $company = Company::count();
        $post_internship = Post_Internship::count();
        $candidate = Personal_Details::count();
        $categories = Category::select('id', 'category')->get();

        return view("frontend.home", compact('interns', 'categories', 'company', 'post_internship', 'candidate'));
    }

    public function view_internship_post($id)
    {
        $interns = Post_Internship::find($id);
        return view("frontend.employee.view_internship_post", compact('interns'));
    }

    public function BrowsJob(Request $request)
    {

        $interns = Post_Internship::where('change_status', '=', 'Approve')
            ->orderby('id', 'desc')->paginate(6);
        $categories = Category::select('id', 'category')->get();

        $location = Post_Internship::select('location')->distinct()->get();

//advance_search
        $job_title = $request->input('title');
        $category_id = $request->input('category_id');
        $location_search = $request->input('location');

        if ($request->input('category_id')) {
            $interns = Post_Internship::query()
                ->where('category_id', '=', $request->category_id)
                ->paginate(6);
        }

        if ($request->input('title')) {

            $interns = Post_Internship::query()
                ->where('internship_title', 'like', "%{$job_title}%")
                ->paginate(6);


        }
        if ($request->input('location')) {

            $interns = Post_Internship::query()
                ->where('location', 'like', "%{$location_search}%")
                ->paginate(6);
        }
        if ($request->input('category_id') && $request->input('title') && $request->input('location')) {
            $interns = Post_Internship::query()
                ->where('category_id', '=', $request->category_id)
                ->where('internship_title', 'like', "%{$job_title}%")
                ->orWhere('location', 'like', "%{$location_search}%")
                ->paginate(6);


        }
//category_check search
        if ($request->input('category_ids')) {
            $ids = $request->input('category_ids');
            $interns = Post_Internship::query()
                ->whereIn('category_id', $ids)
                ->paginate(6);
        }
        //location_check search
        if ($request->input('location_check_search')) {
            $locations = $request->input('location_check_search');
            $interns = Post_Internship::query()
                ->whereIn('location', $locations)
                ->paginate(6);
        }


        return view("frontend.job_browse", compact('interns', 'categories', 'location'));
    }

//    public function subscribe(Request $request)
//    {
//        $this->validate($request, [
//            'email' => 'required|email|unique:subscribes,email'
//        ]);
//
//        Subscribe::create([
//            'email' => $request->input('email')
//        ]);
//
//        return redirect()->back();
//
//    }

    public function search(Request $request)
    {
        $location = $request->input('location');
        $job_title = $request->input('title');

        if ($request->input('category_id')) {
            $interns = Post_Internship::query()
                ->where('category_id', '=', $request->category_id)
                ->paginate(6);
        }

        if ($request->input('title')) {
            $interns = Post_Internship::query()
                ->where('internship_title', 'like', "%{$job_title}%")
                ->paginate(6);
        }
        if ($request->input('location')) {
            $interns = Post_Internship::query()
                ->where('location', 'like', "%{$location}%")
                ->paginate(6);
        }
        if ($request->has('category_id') && $request->has('title') && $request->has('location')) {
            $interns = Post_Internship::query()
                ->where('category_id', '=', $request->category_id)
                ->where('internship_title', 'like', "%{$job_title}%")
                ->orWhere('location', 'like', "%{$location}%")
                ->paginate(6);

        }

        return view('frontend.search', compact('interns'));
    }

}
