

@extends('layouts.helloapp')

@section('title','Index')



@section('munubar')
 @parent
 インデックスページ
@endsection 

@section('content')
<p>ここが本文のコンテンツです。</p>
@endsection
{{-- <p>Controller value<br>'message' = {{$message}}</p> --}}
{{-- <p>ViewComposer value<br>'View_messgage' = {{$View_message}}</p> --}}

@component('components.message')
 @slot('msg_title')
 CAUTION!
 @endslot
@endcomponent



