<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fang;
use App\Models\Fang as ModelsFang;
use Illuminate\Support\Facades\Storage;

class FangController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store()
    {       
        // dd(request()->all());
        if (request('photo')) {   
          
            $file = request('photo')->store('user', 'public'); 
          }else{
            alert()->error('ผิดพลาด', 'เพิ่มรูปก่อน');
            return back();
          }
       Fang::create([
            'name' => request('name'),
            'age' => request('age'),
            'nickName' => request('nickname'),
            'phone' => request('phone'),
            'photo' => $file
        ]);
        return redirect('/yorsaeng/index');
    }
    public function index()
    {      
        $fangs = Fang::get();
        return view('index', compact('fangs'));
    }
    public function delete(Fang $name)
    {
        $name->delete();
        return redirect('/yorsaeng/index');
    }
    public function update(Fang $name)
    {
  
        if(request('photo')){
            Storage::disk('public')->delete( $name->photo);
            $file = request('photo')->store('user', 'public'); 
          }else{
            $file = $name->photo;
          }
          
        $name->name = request('name');
        $name->age = request('age');
        $name->nickName = request('nickName');
        $name->phone = request('phone');
        $name->photo = $file;
        $name->update();
        return back();
    }
}
