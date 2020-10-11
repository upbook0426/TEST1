<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;

class HelloController extends Controller
{
    public function index(Request $request)
     {
        return view('hello.index',['msg' =>'フォームを入力;']);
     }

    public function post(HelloRequest $request)
     {
        
         return view('hello.index',['msg'=>'正しく入力されました']);
        
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
    /*return view('hello.index',['message'=>'Hello']);*/

    /*return view('hello.index',['data'=>$request->data]);*/

      //post に使用
    /*$validate_rule = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'numeric|between:0,150',
    ];
    $this ->validate($request, $validate_rule); */