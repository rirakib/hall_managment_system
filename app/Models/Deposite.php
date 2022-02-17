<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\DepositeType;

class Deposite extends Model
{
    use HasFactory;
    protected $fillable = ['deposite_type','student_id','short_description',
    'deposite_ammount','deposite_date'
    ];
    
    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
    public function deposite_type(){
        return $this->belongsTo(DepositeType::class,'deposite_type');
    }
    
}
