<?php

// use App\Http\Controllers\ProfileController;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PieceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnomalieController;
use App\Http\Controllers\DiagnosticController;
use App\Http\Controllers\CategoryController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{employee}/update', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employee/{employee}/delete', [EmployeeController::class, 'delete'])->name('employee.delete');



Route::get('/material', [MaterialController::class, 'index'])->name('material.index');
Route::get('/material/create', [MaterialController::class, 'create'])->name('material.create');
Route::post('/material', [MaterialController::class, 'store'])->name('material.store');
Route::get('/material/{material}/edit', [MaterialController::class, 'edit'])->name('material.edit');
Route::put('/material/{material}/update', [MaterialController::class, 'update'])->name('material.update');
Route::delete('/material/{material}/delete', [MaterialController::class, 'delete'])->name('material.delete');



Route::get('/piece', [PieceController::class, 'index'])->name('piece.index');
Route::get('/piece/create', [PieceController::class, 'create'])->name('piece.create');
Route::post('/piece', [PieceController::class, 'store'])->name('piece.store');
Route::get('/piece/{piece}/edit', [PieceController::class, 'edit'])->name('piece.edit');
Route::put('/piece/{piece}/update', [PieceController::class, 'update'])->name('piece.update');
Route::delete('/piece/{piece}/delete', [PieceController::class, 'delete'])->name('piece.delete');




Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');



Route::get('/anomalie', [AnomalieController::class, 'index'])->name('anomalie.index');
Route::get('/anomalie/create', [AnomalieController::class, 'create'])->name('anomalie.create');
Route::post('/anomalie', [AnomalieController::class, 'store'])->name('anomalie.store');
Route::get('/anomalie/{anomalie}/edit', [AnomalieController::class, 'edit'])->name('anomalie.edit');
Route::put('/anomalie/{anomalie}/update', [AnomalieController::class, 'update'])->name('anomalie.update');
Route::delete('/anomalie/{anomalie}/delete', [AnomalieController::class, 'delete'])->name('anomalie.delete');



Route::get('/diagnostic', [DiagnosticController::class, 'index'])->name('diagnostic.index');
Route::get('/diagnostic/create', [DiagnosticController::class, 'create'])->name('diagnostic.create');
Route::post('/diagnostic', [DiagnosticController::class, 'store'])->name('diagnostic.store');
Route::get('/diagnostic/{diagnostic}/edit', [DiagnosticController::class, 'edit'])->name('diagnostic.edit');
Route::put('/diagnostic/{diagnostic}/update', [DiagnosticController::class, 'update'])->name('diagnostic.update');
Route::delete('/diagnostic/{diagnostic}/delete', [DiagnosticController::class, 'delete'])->name('diagnostic.delete');


Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{category}/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{category}/delete', [CategoryController::class, 'delete'])->name('category.delete');
