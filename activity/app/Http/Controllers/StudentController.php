<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function updateRow(){
        $student = Student::find(1);
        if($student) {
            $student->update([
                'name' => 'Thư',
                'age' => 19,
                'location' => "Sơn Trà"
            ]);
        }
    }
    public function deleteRow(){
        $student = Student::find(26);
        if($student) {
            $student->delete();
        }
        else {
            return "Không tồn tại hàng 26";
        }
    }
}