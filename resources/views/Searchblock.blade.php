@extends('layouts.header')
@section('title')
Поиск </title>
@endsection
@section('content')
<form method="get" action="/search" id="search_form">
<input type="search" name="search_field" placeholder="Поиск"/>
<input type="submit" class="btn" value="Найти">
</form>
@foreach($Searchblock as $PL)
<h3><a>{{$PL->title}}</a></h3>
<p>
{{$PL->description}}
</p>
<header>
<hr>
@endforeach
@endsection