<?php


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CatogryController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegisterStudent_Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StettingController;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/open-close-Register/{boolen}",[StettingController::class,"open_close_Register"]);

Route::controller(CatogryController::class)->group(function(){
    Route::get('Get_All_Cat','index')->name('Get_All_Cat'); 
    Route::post('/add','create')->name('Add');  
    Route::get('/catogries/{id}','delete');
    Route::put('/catogriesedit/{id}','edit');

    Route::post('/ee','Search')->name('seeerch.index'); 

});


Route::controller(RegisterStudent_Controller::class)->group(function(){
    Route::get('/regster_student','index')->name('regster_student'); 
    Route::get('/Student_Grades','student_grades')->name('Student_Grades'); 
    Route::get('/info-regster_student/{id}', "show")->name('show.regster_student');
    Route::put("/info-regster_student/{id}", "update")->name("update.regster_student");
});


Route::controller(NewsController::class)->group(function(){
    Route::get('/get','index')->name('get_news'); 
    Route::post('/addnews','create')->name('add.news');  
    Route::get('/image/{id}','showImage')->name('image.show');
    Route::get('/shownews/{id}','showregister')->name('show.news'); 
    Route::delete('/deletenews/{id}','delete')->name('delete.news');



});

Route::controller(SubjectController::class)->group(function(){
    Route::get('/Setting_Library','index')->name('Setting_Library'); 
    Route::post('/addsubject','store')->name('add.subject');  
    Route::get('/show/{id}','showsubject')->name('show.subject'); 
    Route::get('/pdf/{id}','viewPdf')->name('pdf.view'); 

    Route::put('/subjectedit/{id}','edit')->name('edit.subject');
    Route::get('/deletesubject/{id}','delete')->name('delete.subject');
    Route::post('/','Search')->name('serch.index'); 
});

