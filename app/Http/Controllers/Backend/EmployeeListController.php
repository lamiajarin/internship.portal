<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeListController extends Controller
{
    //
    public function employeeList(){
        $list=User::Where('role','=','employee')->get();
        return view('backend.contents.employeeList',compact('list'));
    }
    public function EmployeeDelete($id)
    {

        $company = User::find($id);
        if (!empty($company)) {
            $company->delete();
            return redirect()->back()->with('message', "Delete all details");
        }
    }
    }
