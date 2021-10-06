<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Courses;
use Illuminate\Http\Request;
use App\Http\Requests\courseReq;
class CourseCon extends Controller
{

    public function index()
    {
        //
          $courses = Courses::all();
        return view("courses.courses",compact('courses'));
    }

    public function create()
    {
        //
    }


    public function store(courseReq $request)
    {

    //def vars
    $input = $request ->all();
    $rules = $request->rules();
    $messages = $request->messages();
    $validator = Validator::make($input, $rules, $messages);
//insert
        Courses::create([
            'name' => $request->name,
            'date' => $request->date,
            'course_duration' => $request->course_duration,
            'decs' => $request->decs,
            'image' => $request->image,
            'teacher_id' => $request->teacher_id,
            'price' => $request->price,
            'image' => $request->course_duration,
        ]);
        session()->flash('Add', 'تم اضافة الدورة بنجاح ');
        return redirect('/courses');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
        $id = $request->id;
        $validatedData = $request->validate([
            'name' => 'required|max:100|unique:courses,name,'.$id,
            'price' => 'required',
        ],[

            'name.required' =>'يرجي ادخال اسم الدورة',
            'name.unique' =>'اسم الدورة مسجل مسبقا',
            'name.max' =>'اسم الدورة طويل جدا ',
            'price.required' =>'يرجي ادخال سعر الدورة',
        ]);
        $courses = Courses::find($id);
        $courses ->update([
            'name' => $request->name,
            'price' => $request->price,
            'techer_name' => $request->techer_name,
            'phone' => $request->phone,
            'course_duration' => $request->course_duration,
        ]);
        session()->flash('edit', 'تم تعديل الدورة بنجاح ');
        return redirect('/courses');


    }


    public function destroy(Request $request)
    {
        //
        $id = $request->id;
        Courses::find($id)->delete();
        session()->flash('delete','تم حذف الدورة بنجاح');
        return redirect('/courses');
    }
}
