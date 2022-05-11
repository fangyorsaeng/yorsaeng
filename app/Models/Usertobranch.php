<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usertobranch extends Model
{
    protected $fillable = ['user_id','branch_id'];

public function branch()
{
return $this->belongsTo(\App\Models\Branchname::class, 'branch_id', 'id');
}
public function user()
{
return $this->belongsTo(\App\Models\user::class, 'user_id', 'id');
}

}