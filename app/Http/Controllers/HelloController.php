<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
     {
        $items = DB::table('people')->get();
        return view('hello.index',['items'=> $items]);

    }

    public function post(Request $request)
     {
         $validate_rule = [
                'msg' => 'required',
         ];
    $this->validate($request,$validate_rule);
    $msg =$request->msg;
    $response =new Response(view('hello.index',['msg'=>
    '['. $msg .']をクッキーに保存しました']));
    $response->cookie('msg',$msg,100);
    return $response;
     }
     public function add(Request $request)
     {
         return view ('hello.add');
     }

     public function create(Request $request)
     {
         $param =[
            'name' => $request->name,
            'mail' =>$request->mail,
            'age' => $request->age,
         ];
         DB::table('people')->insert($param);
         return redirect('/hello');
     }

     public function edit(Request $request)
     {
    
     $item =  DB::table('people')
        ->where('id',$request->id)->first();
     return view('hello.edit',['form' => $item]);
    }

    public function update(Request $request)
     {
         $param =[
            'name' => $request->name,
            'mail' =>$request->mail,
            'age' => $request->age,
         ];
         DB::table('people')
         ->where('id',$request->id)
         ->update($param);
         return redirect('/hello');
     }

     public function del(Request $request)
     {
        $item =  DB::table('people')
        ->where('id',$request->id)->first();
     return view('hello.del',['form' => $item]);
    }

    public function remove(Request $request)
     {
         DB::table('people')
         ->where('id',$request->id)->delete();
        return redirect('/hello');
     }

     public function show(Request $request)
     {
        $name = $request->name;
        $items = DB::table('people')
        ->where('name','like', '%' .$name .'%')
        ->where('mail','like','%'. $name . '%')
        ->get();
        return view('hello.show',['items'=> $items]);
     }
     public function rest(Request $request)
     {
         return view('hello.rest');
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
    /*
    return view('hello.index',['msg'=>'フォームを入力してください' ]);
    */
    /*
    view('hello.index',['msg'=>'正しく入力されました']);
    */  
    /*
    if ($request->hasCookie('msg'))
    {
        $msg ='Cookie: ' . $request->cookie('msg');
    }  else {
           $msg = '*クッキーはありません';
    }
    return view('hello.index',['msg'=> $msg]);
    */

    /*  //データベース select
    if (isset($request->id))
     {
     $param = ['id' => $request->id];
     $items =  DB::select('select * from people where id = :id',
        $param);
     } else {
     $items = DB::select('select * from people');
    }
     return view('hello.index',['items' => $items]);
     */
    /*
    $id = $request->id;
    $items = DB::table('people')->where('id','<=', $id)->get();
    return view('hello.show',['items'=> $items]);
    */
    /*
    DB::insert('insert into people (name,mail,age) values 
    (:name,:mail,:age)', $param);
    return redirect('/hello');
    */
    /*
    $param = ['id' => $request->id];
     $item =  DB::select('select * from people where id = :id',
        $param);
     
     return view('hello.edit',['form' => $item[0]]);
     */