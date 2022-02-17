<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['department_code','student_id','name','father_name',
    'mobile_number','address','image'
    ];
    public function department(){
        return $this->belongsTo(Department::class,'department_code');
    }
}
