<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('hello');
});
Route::get('/welcome', function () {
    return "welcome";
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/menu/{id}', function ($id) {
    $user = 'id: '.$id;
    return  $user;
});
Route::get('/menu/{id}/{name}', function ($id, $name) {
    $user = 'id: '.$id. ' name: '.$name;
    return $user;
});
Route::get('/test/menu/{id}/{name}', function ($id, $name) {
    $user = 'id:'. $id . ' name:'. $name;
    $university = "kmitl";
    return view('menu') -> with("data",$user)-> with("university",$university);
});
Route::get('/student/{id}/{name}', function ($id, $name) {
    $student = [1=>[
        'name' => $name,
        'university' => 'CMU',
        'department' => 'computer science'
    ]];
    return view('student', ['student' => $student[$id]]);
    // return view('student', ['student' => $student, 'id'=> $id])
    //@foreach($student as $st) ui
});