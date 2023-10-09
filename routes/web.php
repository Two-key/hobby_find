<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TalkController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('/')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/index/search', [CategoryController::class, 'search']);
        Route::get('/group_join', [GroupController::class, 'showGroupJoinPage']);
        Route::get('/index/like', [GroupController::class, 'showGroupLikePage'])->name('showGroupLikePage');
        Route::get('/index/create_group', [GroupController::class, 'createGroupPage']);
        Route::get('/index/leader_create', [GroupController::class, 'leaderCreate'])->name('leaderCreate');
        Route::post('/groups', [GroupController::class, 'groupStore']);
        Route::get('/categories/group_show', [CategoryController::class, 'groupShow'])->name('groupShow');
        Route::get('/like/{group}', [LikeController::class, 'like'])->name('like');
        Route::get('/group_show/{group}', [GroupController::class, 'showGroupContent']);
        Route::get('/{group}/post_create', [PostController::class, 'postCreate']);
        Route::get('/{group}', [PostController::class, 'groupContent'])->whereNumber('group');
        Route::post('/{group}/posts', [PostController::class, 'postStore']);
        Route::post('/{group}/user_join', [GroupController::class, 'userJoin']);
        Route::get('/group_talk/{group}', [TalkController::class, 'groupTalk'])->name('groupTalk');
        Route::post('/{group}/messages', [TalkController::class, 'sendMessage']);
        Route::post('/like', [GroupController::class, 'like'])->name('groups.like');
        Route::get('/posts/{post}/post_edit', [PostController::class, 'postEdit']);
        Route::put('/posts/{post}/index/leader_create', [PostController::class, 'postUpdate']);
        Route::delete('/posts/{post}', [PostController::class, 'postDelete']);
        Route::get('/{group}/leadergroup_show', [PostController::class, 'leaderGroupShow']);
        Route::get('/groups/{group}/group_edit', [GroupController::class, 'showGroupEditPage']);
        Route::put('/groups/{group}/index/leader_create', [GroupController::class, 'updateGroup']);
        Route::delete('/groups/{group}', [GroupController::class, 'deleteGroup']);
    });
});

require __DIR__.'/auth.php';
