<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branchname extends Model
{
    protected $fillable = ['name'];

public function to_branchs()
{
    return $this->hasMany(\App\Models\Usertobranch::class, 'branch_id', 'id');
}
}
