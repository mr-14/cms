<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Lists post items
     *
     * @return \Illuminate\Http\Response
     */
    public function showList()
    {
        return view('post.list');
    }
}
