<?php

use App\Http\Controllers\DerpartmentController;
use App\Http\Controllers\ServiceController;
use App\Models\Department;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        //$users = User::all();
        $users = DB::table('users')->get();
        return view('dashboard',compact('users'));
    })->name('dashboard');

    
    
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/department/all',[DerpartmentController::class,'index'])->name('department');
    Route::post('/department/add',[DerpartmentController::class,'store'])->name('addDepartment');

    Route::get('department/edit/{id}',[DerpartmentController::class,'edit']);
    Route::post('department/update/{id}',[DerpartmentController::class,'update']);

    Route::get('department/softdelete/{id}',[DerpartmentController::class,'softdelete']);
    Route::get('department/recovery/{id}',[DerpartmentController::class,'recovery']);
    Route::get('department/delete/{id}',[DerpartmentController::class,'delete']);


    Route::get('/service/all',[ServiceController::class,'index'])->name('service');
    Route::post('/service/add',[ServiceController::class,'store'])->name('addService');
    Route::get('service/edit/{id}',[ServiceController::class,'edit']);
    Route::post('service/update/{id}',[ServiceController::class,'update']);
    Route::get('service/delete/{id}',[ServiceController::class,'delete']);
    
});

