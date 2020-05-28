@extends('layouts.headerr')
@section('title')
 Login </title>
@endsection
@section('content')
        <p><input type="text" name="login" value="" placeholder="Логин или Email"></p>
        <p><input type="password" name="password" value="" placeholder="Пароль"></p>
        <a href="http://127.0.0.1:8000/index" class="c">Войти</a> <a href="http://127.0.0.1:8000/Registr" class="c">Зарегистрироваться</a>
@endsection