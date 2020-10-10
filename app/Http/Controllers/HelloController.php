<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
     {
         return view('hello.index',['message'=>'Hello']);
     }
}
/*
$data =
[
    ['name'=>'山田', 'mail'=>'taro@yahoo'],
    ['name'=>'田中', 'mail'=>'tanaka@gmail'],
];
    return view('hello.index',['data'=>$data]);
    */