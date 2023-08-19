<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\TalkController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [CategoryController::class, 'index']);

Route::get('/index/serch', [CategoryController::class ,'serch']);

Route::get('/group_join', [GroupController::class, 'group_join']);

Route::get('/index/create_group', [GroupController::class, 'create_group']);

Route::post('/groups', [GroupController::class, 'store']);

Route::get('/categories/group_show', [CategoryController::class,'group_show'])->name('group.serch');

Route::get('/like/{group}', [LikeController::class,'like'])->name('like');

Route::get('/group_show/{group}', [GroupController::class ,'group_content']);

Route::get('/group_content/{group}/post_create', [PostController::class,'post_create']);

Route::get('/{group}', [PostController::class, 'group_content']);

Route::post('/{group}/posts', [PostController::class, 'store']);

Route::post('/{group}/user_join', [GroupController::class,'user_join']);

Route::post('/add', [TalkController::class,'add'])->name('add');

Route::get('/result/ajax', [TalkController::class, 'getData']);

Route::get('/{group}/group_talk', [TalkController::class, 'group_talk']);

Route::post('/like', [LikeController::class, 'like'])->name('groups.like');

Route::get('posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/{post}', [PostController::class, 'update']);

