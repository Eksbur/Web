@extends('layouts.headerr')
@section('title')
Register
@endsection
@section('content')
        <p><input type="text" name="login" value="" placeholder="Логин"></p>
        <p><input type="text" name="login" value="" placeholder="Email"></p>
        <p><input type="password" name="password" value="" placeholder="Пароль"></p>
        <p><input type="password" name="password" value="" placeholder="Повторите пароль"></p>
        <a href="http://127.0.0.1:8000/index" class="c">Зарегистрироваться</a>
        <hr>
        <p2>Есть аккаунт?</p2>
        <a href="http://127.0.0.1:8000/Login" class="c">  Войти на аккаунт PS</a>
@endsection
