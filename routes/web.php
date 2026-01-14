<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/user', [UserController::class, 'index']);

Route::get('/git', function () {
    dd('git ok');
});

Route::get('/calculator/{num1}/{num2}', function (string $num1, string $num2) {

    $data = [
        'num1' => $num1,
        'num2' => $num2,
        'plus' => $num1 + $num2,
        'minus' => $num1 - $num2,
        'multiply' => $num1 * $num2, 
        'divide' => $num1 / $num2,
    ];

    // dd($data);

    return view('calculator')->with('data', $data);
});

Route::get('/sum/{num}', function (string $num) {
    

    $sum = 0;
    for ($i = 1; $i <= $num; $i++) {
        $sum += $i;
    };
    
    $data = [
        'num' => $num,
        'sum' => $sum,
    ];
    
    return view('sum')->with('result', $data);
});

Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});

Route::get('/', function () {
    dd(123);
    $name = 'qwe';
    $mobile = '021316816';
    $test = "$name - $mobile";
    dd($test);
    return view('welcome');
});


Route::get('/home0114', function () {
    return view('home0114');
});




