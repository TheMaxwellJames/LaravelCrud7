<?php

use Illuminate\Support\Facades\Route;
use App\Models\todo_list;
use App\Http\Controllers\TodoListController;

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

// Route::get('/', function () {
//     return view('view_list')->with('todo_arr', todo_list::all());
// });

Route::get('/', [TodoListController::class, 'index']);

Route::get('/create', [TodoListController::class, 'create']);

Route::get('/save_new_list', [TodoListController::class, 'store']);

Route::get('/delete/{id}', [TodoListController::class, 'destroy']);

Route::get('/edit/{id}', [TodoListController::class, 'edit']);

Route::get('/update_list/{id}', [TodoListController::class, 'update']);