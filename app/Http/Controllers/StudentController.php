<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::all();

        //dd($students);

        return view('students.index', compact('students'));
    }
}
