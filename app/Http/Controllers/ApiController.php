<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    function CreatePerson(Request $request){
        $name = $request->name;
        $email = $request->email;
    return response([
        "name"=> $name,
        "email"=> $email
    ], 200);
    
    }
}
