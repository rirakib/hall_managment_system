<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student = Student::all();
        
        return view('backend.student.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.student.create');
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
        $student = new Student();
        $student->student_id = $request->student_id;
        $student->name = $request->name;
        $student->department_code = $request->department_code;
        $student->father_name = $request->father_name;
        $student->address = $request->address;
        $student->mobile_number = $request->mobile_number;
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_extention = $image->getClientOriginalExtension();
            $image_name = time().'.'.$image_extention;
            $image->move('images/student/image', $image_name);
            $student->image = $image_name;  
        }
        
        $student->save();
        return redirect()->back()->with('stutus','Data created successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student = Student::find($id);
        return view('backend.student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        $student = Student::find($id);
        $student->update($data);

        return redirect()->back()->with('stutus','Data update successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student = Student::find($id);
        $student->delete();
        return redirect()->back()->with('delete','Data deleted successfully');
    }
}
