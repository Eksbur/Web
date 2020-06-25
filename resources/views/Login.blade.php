@extends('layouts.headerr')
@section('title')
 Login </title>
@endsection
@section('content')
@if (!Auth::check())

	<form methof="get" action="/auth" id="login">
        <input type="text" name="login" placeholder="Логин">
    </p>
        <input type="password" name="password" placeholder="Пароль">
    </p>      
        <input type="submit" class="btn" value="Вход">
	</p>
</form>
<h3><a href="http://127.0.0.1:8000/Registr" class="button">Зарегистрироваться</a></h3>
<h3><a href="http://127.0.0.1:8000/index" class="button">Главное Меню</a></h3>
@else
	<h3><a href="/logout">Выход</a></h3>
	<h3><a href="http://127.0.0.1:8000/index" class="button">Главное Меню</a></h3>
@endif	
@endsection