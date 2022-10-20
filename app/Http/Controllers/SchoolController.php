<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class SchoolController extends Controller
{
    public function listStudent() {

        // $students = Student::with( "course" )->get();    

        // // foreach ( $students as $student ) {

        // //     echo "<pre>";
        // //     print_r( $student->name . " ");
        // //     print_r( $student->course->course );
        // // }

        // return view("list_student", [
        //     "students" => $students
        // ]);

        $students = Course::find( 3 )->student;

         return view("list_student", [

            "students" => $students
         ]);

    }
}
