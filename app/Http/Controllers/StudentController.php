<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response | mixed
     */
    public function index()
    {
        $students = Student::query()->paginate(30);
        return view("admin.students.index")->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response | mixed
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response | mixed
     */
    public function store(Request $request)
    {
        # CHECKING VALIDATION
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'name' => 'required|string',
            'age' => 'required|numeric',
            'class' => 'required',
            'roll' => 'required',
            'thumb' => 'file'
        ]);
        if($validator->fails()) {
            return redirect()->route('student.create')->withErrors($validator->errors());
        }

        # VALIDATION PASSED
        $data = $request->except(['token', 'thumb']);
        if($request->hasFile("thumb")) {
            $data['thumb'] = $request->file('thumb')->store('avatars');
        }

        $data['thumb'] = str_replace("avatars/", "",$data['thumb']);
        // dd($data['cover']);

//        dd($data);
        $student = $this->student->create($data);
        return redirect()->to('/student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response | mixed
     */
    public function edit($id)
    {
        $student = $this->student->find($id);
        return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response | mixed
     */
    public function update(Request $request, $id)
    {
        $student = $this->student->find($id);
        $student->name = $request->name;
        $student->age = $request->age;
        $student->class = $request->class;
        $student->roll = $request->roll;
        if($request->hasFile('thumb')){
            $student->thumb = $request->file('thumb')->store('avatars');
        }

        $student->save();
        return redirect()->to('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response | mixed
     */
    public function destroy($id)
    {
        $this->student->where('id', $id)->delete();
        return redirect()->to('teacher');
    }
}
