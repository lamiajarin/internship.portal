<?php

namespace App\Http\Controllers;
use App\Models\Models\Company;
use Illuminate\Http\Request;


class UserController extends Controller
{
  public  function index() {
        return view("backend.layout.main_content");
    }
    //
    public  function company() {
        return view("backend.contents.company");
    }
    public function companypost(Request $request){
        $data=$request->except('_token');

        //if input field name and column name are same
        Company::create($data);
        return redirect()->route('companylist');
    }
    public  function companylist() {
        $list=Company::all();
        return view('backend.contents.companylist',compact('list'));
    }
}
