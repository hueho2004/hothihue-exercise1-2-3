<?php
namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function getInfo($id){
        $person = Person::find($id);
        return $person;
    }
}