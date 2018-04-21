<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(Request $request)
    {
        return view('add_info');
    }

    function info_add(Request $request)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageDir = 'images';
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path($imageDir), $imageName);

        $student = new Student;
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->class = $request->class;
        $student->phone_number = $request->phone_number;
        $student->image = $imageDir . '/' . $imageName;

        $student->save();

        echo "saved successfully";

    }

}
