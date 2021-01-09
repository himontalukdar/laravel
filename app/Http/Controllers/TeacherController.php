<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    protected $teacher;

    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response | mixed
     */
    public function index()
    {
        $teachers = Teacher::query()->paginate(30);
        return view("admin.teachers.index")->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response | mixed
     */
    public function create()
    {
        return view('admin.teachers.create');
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
            'qualification' => 'required',
            'department' => 'required|in:CSE,BBA,EEE,LAW,PHARMACY,ARCHITECTURE',
            'thumb' => 'file'
        ]);
        if($validator->fails()) {
            return redirect()->route('teacher.create')->withErrors($validator->errors());
        }

        # VALIDATION PASSED
        $data = $request->except(['token', 'thumb']);
        if($request->hasFile("thumb")) {
            $data['thumb'] = $request->file('thumb')->store('avatars');
        }

        $data['thumb'] = str_replace("avatars/", "",$data['thumb']);
        // dd($data['cover']);
        $course = $this->teacher->create($data);
        return redirect()->to('/teacher');
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
        $teacher = $this->teacher->find($id);
        return view('admin.teachers.edit', compact('teacher'));
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
        $teacher = $this->teacher->find($id);
        $teacher->name = $request->name;
        $teacher->age = $request->age;
        $teacher->qualification = $request->qualification;
        $teacher->department = $request->department;
        if($request->hasFile('thumb')){
            $teacher->thumb = $request->file('thumb')->store('avatars');
        }

        $teacher->save();
        return redirect()->to('teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response | mixed
     */
    public function destroy($id)
    {
        $this->teacher->where('id', $id)->delete();
        return redirect()->to('teacher');
    }
}
