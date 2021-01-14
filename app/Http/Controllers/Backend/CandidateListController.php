<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Personal_Details;
use App\Models\User;
use Illuminate\Http\Request;

class CandidateListController extends Controller
{
    //

    //candidate_list
    public function candidateList(){

        $list=User::Where('role','=','candidate')->get();
        return view('backend.contents.candidateList',compact('list'));
    }
}
