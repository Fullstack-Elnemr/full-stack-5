<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->save();

        return redirect()->route('students.show', ['id' => $student->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param Student $student
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Student $student
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Student $student
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Student $student)
    {
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->save();

        return redirect()->route('students.show', ['id' => $student->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Student $student
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index');
    }
}
