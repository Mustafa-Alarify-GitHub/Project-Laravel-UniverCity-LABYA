<?php


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CatogryController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegisterStudent_Controller;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});




Route::controller(CatogryController::class)->group(function(){
    Route::get('Get_All_Cat','index')->name('Get_All_Cat'); 
    Route::post('/add','create')->name('Add');  
    Route::delete('/catogries/{id}','delete');

});


Route::controller(RegisterStudent_Controller::class)->group(function(){
    Route::get('/regster_student','index')->name('regster_student'); 
    Route::get('/Student_Grades','student_grades')->name('Student_Grades'); 
    Route::get('/info-regster_student/{id}',"show")->name('show.regster_student'); 

    // Route::post('/addregister','create')->name('add.register');  
    // Route::get('/showregister/{id}','showregister')->name('show.register'); 
    // Route::delete('/deleteregister/{id}','delete')->name('delete.register');

    // Route::get('/get','index')->name('get_register'); 




});


Route::controller(NewsController::class)->group(function(){
    Route::get('/get','index')->name('get_news'); 
    Route::post('/addnews','create')->name('add.news');  
    Route::get('/shownews/{id}','showregister')->name('show.news'); 
    Route::delete('/deletenews/{id}','delete')->name('delete.news');



});

Route::controller(SubjectController::class)->group(function(){
    Route::get('/Setting_Library','index')->name('Setting_Library'); 
    Route::post('/addsubject','store')->name('add.subject');  
    Route::get('/show/{id}','showsubject')->name('show.subject'); 
    Route::delete('/deletesubject/{id}','delete')->name('delete.subject');
});

