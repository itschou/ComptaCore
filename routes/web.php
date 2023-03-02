<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\ProductController;
use App\Models\Category;

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

Route::get('/', function () {
    $categories = Category::all();
    return view('welcome', ['categories' => $categories]);
})->name('index');

Route::get('/devis', [DevisController::class, 'addJob']);
Route::post('/devis', [DevisController::class, 'addJob'])->name('devis');

Route::resource('/products', ProductController::class);

Route::post('/sendjob', [DevisController::class, 'sendJobs'])->name('sendJobs');
