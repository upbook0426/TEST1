

@extends('layouts.helloapp')

@section('title','Index')



@section('menubar')
 @parent
 インデックスページ
 <p>Controller value<br>'message' = {{$message}}</p>
<p>ViewComposer value<br>'View_messgage' = {{$view_message}}</p> 


@endsection 

@section('content')
<p>ここが本文のコンテンツです。</p>


@component('components.message')
 @slot('msg_title')
 CAUTION!
 @endslot
@endcomponent

{{-- @each('components.item', $data, 'item') --}}

@endsection

@section('footer')
 copyright 2017 tuyano.
 @endsection

{{-- <p>Controller value<br>'message' = {{$message}}</p> --}}
{{-- <p>ViewComposer value<br>'View_messgage' = {{$View_message}}</p> --}}
