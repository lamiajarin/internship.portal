<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    //
    public  function vacancylist() {
        $list=Vacancy::all();
        return view('backend.contents.vacancylist',compact('list'));
    }
}
