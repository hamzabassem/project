<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class FontSiteController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('id', 'DESC')->take('3')->get();
        return view('frontend.home',compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $book = Post::all()->where('id',$id);
        return view('frontend.book',compact('book'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $post = Post::orderBy('id', 'DESC')->take('3')->get();
        return view('frontend.books',compact('post'));
    }
}
