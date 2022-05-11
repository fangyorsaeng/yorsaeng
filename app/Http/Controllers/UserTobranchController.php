<?php

namespace App\Http\Controllers;
use App\Models\Fang;
use App\Models\Branchname;
use App\Models\UserTobranch;
use Illuminate\Http\Request;

class UserTobranchController extends Controller
{
   public function select_branch()
   {
    $fangs = Fang::get();
    $branchs = Branchname ::get();
    return view('usertobranch', compact('fangs','branchs'));
   }
   public function store()
   {

       UserTobranch::create([
            'name' => $to_branch->user->id,
            'branch' => $to_branch->branch->id
        ]);
    }
}

