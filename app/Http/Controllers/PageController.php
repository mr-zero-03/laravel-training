<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Here goes the code

    public function home()
    {
       return view( 'home' ); 
    }
    public function blog()
    {
        // Searching on the DB
        $posts = [
          [ 'id' => 1, 'title' => 'PHP', 'slug' => 'php' ],
          [ 'id' => 2, 'title' => 'Laravel', 'slug' => 'laravel' ]
        ];
        return view( 'blog', [ 'posts' => $posts ] ); //Sending the DB data
    }
    public function post( $slug )
    {
        // Searching on the DB
        $post = $slug;
        return view( 'post', [ 'post' => $post ] ); //Sending the DB data
    }
}
