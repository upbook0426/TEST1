@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
 @parent
  更新ページ
@endsection

@section('content')
<table>
<form action="/hello/edit" method="post">
   {{ csrf_field()}}
   <input type="hidden" name="id" value="{{$form->id}}">
   <tr><th>name: </th><td><input type="text" name="name"
      value="{{$form->name}}"></td></tr>
   <tr><th>mail: </th><td><input type="text" name="mail"
   value="{{$form->mail}}"></td></tr>
   
   <tr><th>age: </th><td><input type="text" name="age"
   value="{{$form->age}}"></td></tr>
 
   <tr><th></th><td><input type="submit" value="send"></td></tr>
</form>
</table>

@section('footer')
 copyright 2017 tuyano.
@endsection


{{-- 
@each('components.item', $data, 'item') 

<p>Controller value<br>'message' = {{$message}}</p> 

<p>ViewComposer value<br>'View_messgage' = {{$View_message}}</p> 

@foreach($data as $item)
<tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
@endforeach 


@if ($errors->has('name'))
 <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
 @endif
 <tr><th>name: </th><td><input type="text" name="name"
    value="{{old('name')}}"></td></tr>
 
 @if ($errors->has('mail'))
 <tr><th>ERROR</th><td>{{$errors->first('mail')}}</td></tr>
 @endif
 <tr><th>mail: </th><td><input type="text" name="mail"
    value="{{old('mail')}}" ></td></tr>

    @if ($errors->has('age'))
 <tr><th>ERROR</th><td>{{$errors->first('age')}}</td></tr>
 @endif

 <tr><th>age: </th><td><input type="text" name="age"
   value="{{old('age')}}"  ></td></tr>
 
 <tr><th></th><td><input type="submit"
    value="send"></td></tr>


    <p>{{$msg}}</p>
@if (count($errors) > 0)
<p>入力に問題があります。再入力してください。</p>
@endif
<table>
<form action="/hello"  method="post">
 {{ csrf_field() }}
 @if ($errors->has('msg'))
 <tr><th>ERROR</th><td>{{$errors->first('msg')}}</td></tr>
 @endif
 <tr><th>Message: </th><td><input type="text" name="msg"
    value="{{old('msg')}}"></td></tr>
 
    <tr><th></th><td><input type="submit" value="send"></td></tr>
    
</form>
</table>

   
@foreach ($items as $item)
<tr>
    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>
</tr>
@endforeach
</table>
@component('components.message')
 @slot('msg_title')
 CAUTION!
 @endslot
@endcomponent

--}}