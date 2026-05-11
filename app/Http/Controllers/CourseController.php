<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::where('is_active', 1)->get();
        return view('courses_index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Course;

        $course->name = $request->name;
        $course->description = $request->description;
        $course->credits = $request->credits;
        $course->is_active = 1;

        $course->save();

        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('course_detail', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Course::findorfail($id);
        return view('courses_edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $course = Course::findorfail($id);

        $course->name = $request->name;
        $course->description = $request->description;
        $course->credits = $request->credits;
        $course->is_active = $request->is_active;

        $course->save();

        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = Course::findorfail($id);
        $course->delete();

        return redirect()->route('courses.index');
    }
}
