<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
   function getPerson(Request $request, $name=null){
    return response("Hello {$name}", 200);
   }

   function getPersonById(Request $request, $id=null){
      if($id==null){
         return response("Please provide an id",404);
     }else{
      return response("The Id is {$id}",200);
     }
}

function PersonACC(Request $request, $name=null, $accountid=null){
   return response("Hello {$name}, Your account number is {$accountid}", 200);

}

function create(){
   return view("person");
}

function CreatePerson(Request $request){


   $name = $request->input("name");
   $email = $request->input("email");
   $image = $request->file("image");
   // $image =$request->file("image")->getClientOriginalName();

   if($image->isValid()){
      $imageName = time()."-".$image->getClientOriginalName();
      $image->move(public_path("images"), $imageName);
   }else{
      $imageName =null;
   }
 
   return view("newperson", ["name"=> $name,"email"=> $email, "image"=> $imageName]);

   //return response("Person {$name} with email {$email} created", 200);
  
}



}