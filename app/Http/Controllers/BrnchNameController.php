<?php

namespace App\Http\Controllers;

use App\Models\Branchname;
use App\Models\Fang;

use Illuminate\Http\Request;

class BrnchNameController extends Controller
{
    public function create()
    {
        $exists = Branchname::where('name', request('name'))->exists();
        
        if ($exists) {
            alert()->warning('ผิดพลาด', 'สาขานี้มีอยู่แล้ว');
        }
        
        branchname::create([
            'name' => request('name')
        ]);
       
        return view('branchname');
    }
}
