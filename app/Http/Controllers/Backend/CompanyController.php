<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function company()
    {
        return view("frontend.employee.company");
    }

    public function companypost(Request $request)
    {
        $file_name = '';

        $data = $request->except('_token');
//        step1- check has file
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            //step2- generate unique name
            $file_name = date('Ymdhms') . '.' . $image->getClientOriginalExtension();
            //step 3- store file with name
            $image->storeAs('users', $file_name);

        }

//
//        Company::create($data);
//        $data->lo
//go=$request->input('image');


        Company::updateOrCreate([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'website' => $request->input('website'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'logo' => $file_name,
            'profile_id' => auth()->user()->empProfile->id
        ]);


        return redirect()->route('company');
//     //dd($data);
//        return redirect()->back();


    }

    public function companyView($id)
    {

        $company = Company::with('profile')->find($id);
        return view('backend.contents.companyDetails', compact('company'));
    }

    public function companylist()
    {
        $list = Company::all();
        $company = Company::with('profile')->get();

        return view('backend.contents.companylist', compact('list', 'company'));
    }

    public function companyDelete($id)
    {

        $company = Company::find($id);
        if (!empty($company)) {
            $company->delete();
            return redirect()->back();
        }

    }
    public function search()
    {

        return redirect()->back();
    }
}
