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
use Illuminate\Support\Facades\Input;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/admin','back\adminController');
Route::resource('/annee','back\AnneeController');
Route::resource('/level','back\LevelController');
Route::resource('/section','back\SectionController');
Route::resource('/class','back\ClassController');

Route::get('api/dropdown', function(){
    $id = Input::get('option');
    $level = App\Section::find($id)->Levels()->get();
    return $level;
});





