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
        $student = Student::create($request->all());

        echo "saved successfully";

    }

}
