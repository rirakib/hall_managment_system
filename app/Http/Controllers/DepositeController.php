<?php

namespace App\Http\Controllers;

use App\Models\Deposite;
use App\Models\DepositeType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DepositeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $deposite =  DB::table('deposites')
        ->join('students', 'students.student_id' , '=', 'deposites.student_id')
        ->join('deposite_types', 'deposite_types.id' , '=', 'deposites.deposite_type')
        ->select('deposites.id as deposite_id','students.name as student_name','mobile_number',
            'deposite_types.name as type','deposite_types.price as price',
            'deposite_ammount','deposite_date'
        )
        // ->orderBy('customers.name', 'desc')
        ->paginate(4);
        return view('backend.deposite.index',compact('deposite'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.deposite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        Deposite::create($data);
        return redirect()->back()->with('stutus','Deposite added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deposite  $deposite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deposite  $deposite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deposite  $deposite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deposite  $deposite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function depositeIndex()
    {
        $deptype = DepositeType::all();
        return view('backend.deposite.depositecreate',compact('deptype'));
    }
    public function depositeStore(Request $request)
    {
        $data = $request->all();
        DepositeType::create($data);
        return redirect()->back();
    }
}
