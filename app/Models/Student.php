<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    static $rules=[
        "name"=> 'required',
        "control_number"=> 'required',
        "semester"=> 'required',
        "group"=> 'required',
        "career"=> 'required'
    ];
    protected $fillable =[
        'name',
        'control_number',
        'semester',
        'group',
        'career'
    ];
    
}
