<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Employee extends Controller
{
    public function Show(){
        return view('welcome');
    }

    public function InsProd(){
        return view('Prod');
    }


    public function insert_emp(){
        $name = request('name');
        $salary = request('salary');

        DB::insert("insert into employee(empName,salary) values (?,?)",[$name,$salary]);

        return redirect('/');
    }
}
