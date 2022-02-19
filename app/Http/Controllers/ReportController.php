<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    //
    public function pending(){
        $pending = DB::table('deposites')->where('deposite_ammount','<',1500)
        ->join('students','students.student_id','=','deposites.student_id')
        ->join('deposite_types','deposite_types.id','=','deposites.deposite_type')
        ->select('deposites.id as id','students.name as name','students.mobile_number as mobile_number',
         'deposite_types.price as price','deposites.deposite_ammount as deposite'   
        )
        ->orderBy('id','desc')
        ->paginate(5);
        
        return view('backend.report.pending',compact('pending'));
    }
}
