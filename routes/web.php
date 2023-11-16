<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("Person/{name?}", [PersonController::class, "getPerson"])->whereAlpha("name");
Route::get("Personid/{id?}", [PersonController::class, "getPersonById"])->whereNumber("id");

Route::get("Personall/{name?}/account/{accountid}", [PersonController::class, "PersonACC"])->whereAlpha("name")->whereNumber("accountid");


Route::get("/persons", [PersonController::class,"create"]);
Route::post("/persons", [PersonController::class,"CreatePerson"]);