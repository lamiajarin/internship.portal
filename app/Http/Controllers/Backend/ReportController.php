<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function AdminReport(Request $request){
//        dd($request->all());
        $list=User::all()->where('role','!=','admin');

        $start_date = $request->input('start_date');
        $to_date = $request->input('end_date');
        $role = $request->input('role');

        if ($request->has('start_date') && $request->has('end_date') || $request->has('role')) {

//dd($request->start_date);
            $list = User::WhereBetween('created_at', [$start_date,$to_date])
                ->orWhere('role', '=', $role)->get();

        }
            return view('backend.contents.report',compact('list'));


    }
}
