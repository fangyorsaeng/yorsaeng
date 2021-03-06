<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fang extends Model
{
    protected $fillable =['name','age','nickName','phone','photo'];
    
public function to_branchs()
{
    return $this->hasMany(\App\Models\Usertobranch::class, 'id','user_id');
}
}
