<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Blog;
use Illuminate\Http\Request;
use App\Models\Comment;

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

Route::get('/', [MainController::class, "mainPage"]);


Route::get('/about', [MainController::class, "about"]);



Route::get('/blog/{id}', function ($id){
    $post = DB::table('blogs')->where('id', '=', $id)->first();
    return view('post',['post'=>$post]);
});

Route::get('addPost',function (){
    return view('addPost');
});
Route::post('addPost',function (Request $request){
    $input = $request->all();
    $blog = new Blog();
    $blog->title = $input['title'];
    $blog->content = $input['content'];
    $blog->bgImage = 'post-bg.jpg';
    $blog->save();
    return 'success';
});

Route::post('addComment',function (Request $request){
   $userId = Auth()->user()->getAuthIdentifier();
   $input = $request->all();
   $comment = new Comment();
   $comment->text = $input['text'];
   $comment->post_id = $input['post_id'];
   $comment->user_id = $userId;
   $comment->save();
   return 'success';
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
