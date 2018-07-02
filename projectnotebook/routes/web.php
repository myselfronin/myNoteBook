<?php
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
    return view('index');
});


Route::get('/profile', function(){
    return view('profile');
});

Route::get('/profile/edit', function(){
    return view('profileedit');
});




//Syllabus

Route::get('/syllabus', function () {
    return view('syllabus.syllabus');
})->name('syllabus');

// civil
Route::get('/syllabus/bce', function () {
    return view('syllabus.civil.bce');
})->name('bce');




//computer
Route::get('/syllabus/bct', function () {
    return view('syllabus.computer.bct');
})->name('bct');

Route::get('/syllabus/bct/math1',function(){
    return view('syllabus.computer.first.mathematics');
});

Route::get('/syllabus/bct/cprogram',function(){
    return view('syllabus.computer.first.cprogramming');
});

Route::get('/syllabus/bct/drawing1',function(){
    return view('syllabus.computer.first.drawing');
});
Route::get('/syllabus/bct/physics',function(){
    return view('syllabus.computer.first.physics');
});
Route::get('/syllabus/bct/applied',function(){
    return view('syllabus.computer.first.applied');
});
Route::get('/syllabus/bct/bee',function(){
    return view('syllabus.computer.first.bee');
});





//electrical
Route::get('/syllabus/bel', function () {
    return view('syllabus.electrical.bel');
})->name('bel');

Route::get('/syllabus/bex', function () {
    return view('syllabus.electronics.bex');
})->name('bex');

Route::get('/syllabus/bge', function () {
    return view('syllabus.geomatics.bge');
})->name('bge');

Route::get('/syllabus/bme', function () {
    return view('syllabus.mechanical.bme');
})->name('bme');





//Resources for facultie
Route::resource('/notes/bce','CivilController');

Route::resource('/notes/bct','ComputerController');
Route::resource('/note/bct','ReplyController');
Route::resource('/notes/bel','ElectricalController');
Route::resource('/notes/bex','ElectronicController');
Route::resource('/notes/bme','MechanicalController');
Route::resource('/notes/bge','GeomaticController');




Route::resource('posts', 'PostsController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();



Route::get('/notes/instrumentationII',function(){
        //PDF file is stored under project/public/download/info.pdf
        $file="./downloads/computer/Instrumentation II.zip";
        return Response::download($file);

});

Route::get('/notes/COA',function(){
        //PDF file is stored under project/public/download/info.pdf
        $file="./downloads/computer/COA.zip";
        return Response::download($file);

});
Route::get('/notes/SoftwareEngineering',function(){
        //PDF file is stored under project/public/download/info.pdf
        $file="./downloads/computer/Software Engineering.zip";
        return Response::download($file);

});
