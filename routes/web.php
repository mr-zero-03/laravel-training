<?php

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

Route::get( '/', function () {
    return view( 'home' );
} )->name( 'home' );

Route::get( '/blog', function () {
    // Searching on the DB
    $posts = [
        [ 'id' => 1, 'title' => 'PHP', 'slug' => 'php' ],
        [ 'id' => 2, 'title' => 'Laravel', 'slug' => 'laravel' ]
    ];
    return view( 'blog', [ 'posts' => $posts ] ); //Sending the DB data
} )->name( 'blog' );

Route::get( '/blog/{slug}', function ( $slug ) {
    // Searching on the DB
    $post = $slug;
    return view( 'post', [ 'post' => $post ] ); //Sending the DB data
} )->name( 'post' );
