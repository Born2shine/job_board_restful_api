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
    $type = ['Full-time', 'Temporary', 'Contract', 'Permanent', 'Internship', 'Volunteer'];
    $condition = ['Remote', 'Part Remote', 'On-Premise'];
    $categories = ['Tech', 'Health care', 'Hospitality', 'Customer Service', 'Marketing'];
    
    // function rand_num($arr)
    // {
    //    $length = (int) count($arr) - 1;
    //    return rand(0, $length);
    // }


    // dd($condition[rand_num($condition)]);

    return view('welcome');
});
