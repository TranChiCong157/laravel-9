@extends('layouts.main ')
@section('title') 
    {{$title}}
@endsection

@section('sidebar')
@parent
<h3>Home sidebar</h3>
@endsection

@section('content')
    
            <h1>Home</h1>
            @include('admin.contents.slide')
            @include('admin.contents.about')
   
@endsection

@section('css')
    
@endsection

@section('js')
    
@endsection