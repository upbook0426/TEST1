@extends('layouts.helloapp')

@section('title','Show')

@section('menubar')
 @parent
 インデックスページ
@endsection

@section('content')

@if ($items !=null)
   @foreach($items as $item)
   <table width="400px">
   <tr><th width="50px">id:</th>
  <td width="50px">{{$item->id}}</td>
  <td width="50px">name:</th>
  <td>{{$item->name}}</td></tr>
  </table>
  @endforeach
@endif

@component('components.message')
 @slot('msg_title')
 CAUTION!
 @endslot
@endcomponent

@endsection


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
--}}