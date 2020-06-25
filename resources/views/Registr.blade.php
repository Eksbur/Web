@extends('layouts.headerr')
@section('title')
Register
@endsection
@section('content')
	<form methof="get" action="/registration" id="registration">
        <input type="text" name="login" placeholder="Логин">
    </p>
        <input type="text" name="email_address" placeholder="Email">
    </p>
        <input type="password" name="password" placeholder="Пароль">
    </p>      
        <input type="submit" class="btn" value="Вход">
	</p>
</form>
<h3><a href="http://127.0.0.1:8000/index" class="button">Главное Меню</a></h3>
<h3><a href="http://127.0.0.1:8000/Login" class="button">Есть Аккаунт?</a></h3>
@endsection
