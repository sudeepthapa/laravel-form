<?php
use Carbon\Carbon;
use App\Post;
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

Route::resource('/posts','PostController');


Route::get('/dates', function(){
        $date = new DateTime('+1 Weeks');
        echo $date->format('m-d-y');
        echo '<br />';
        echo Carbon::now()->addDays(8)->diffForHumans();
        echo '<br />';
        echo Carbon::now()->subMonths(8)->diffForHumans();
        echo '<br />';
        echo Carbon::now('Asia/Kathmandu');
});

Route::get('/gettitle', function(){
    $post = Post::find(5);
    return $post->title;
});