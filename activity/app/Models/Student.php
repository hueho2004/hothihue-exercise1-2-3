<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    public function updateRow($id){
        $students = DB::table('students')
        ->where('$id',$id)
        ->update([
    
        ]);
        return $students;
    }
    public function getStudentsFromPhnomPenh()
{
    $students = Student::where('location', 'Phnom Penh')
                    ->where('age', '>', 20)
                    ->get();
    return $students;
}
}