<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request)
     {
         return view('hello.index',['msg'=>'フォームを入力してください' ]);
     }

    public function post(HelloRequest $request)
     {
        view('hello.index',['msg'=>'正しく入力されました']);
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

    /*return view('hello.index',['msg'=>'正しく入力されました']); */
    
    /*
    $validator = Validator::make($request->all(),[
        'name' =>'required',
        'mail' =>'email',
        'age' =>'numeric|between:0,150',
    ]);
    if ($validor->fails()) {
     return redirect('/hello')
        ->withErrors($validator)
        ->withInput();
    }
     view('hello.index',['msg'=>'正しく入力されました']);
     */

    /*
    public function post(HelloRequest $request)
    {
       view('hello.index',['msg'=>'正しく入力されました']);
       }
    */
    /*　　//インデックス
    $validator = Validator::make($request->query(),[
        'id' =>'required',
        'pass' => 'required',
    ]);
    if ($validator->fails()) {
     $msg ='クエリ-に問題があります。';
    } else{
        $msg ='ID/PASSを受け付けました。フォームを入力してください';
    } 
     return view('hello.index',['msg'=>$msg, ]);
    */

     /*  // ポスト
    $rules = [
        'name' =>'required',
        'mail' =>'email',
        'age' =>'numeric|between:0,150',
         ];
         $messages = [
         'name.required' => '名前は必ず入力して下さい',
         'mail.email' => 'メールアドレスが必要です',
         'age.numeric' => '年齢を整数で記入してください',
         'age.between' => '年齢は0~150の間で入力してください',
         'age.min' => '年齢はゼロ歳以上で記入ください',
         'age.max' => '年齢は200歳以下で記入ください',
         ];
         $validator = Validator::make($request->all(),$rules,$messages);

         $validator ->sometimes('age','min:0',function($input){
             return !is_int($input->age);
         });
         $validator ->sometimes('age','max:200',function($input){
            return !is_int($input->age);
        });

         if($validator->fails()) {
             return redirect('/hello')
             ->withErrors($validator)
             ->withInput();  
         }
        view('hello.index',['msg'=>'正しく入力されました']);
        }
    */