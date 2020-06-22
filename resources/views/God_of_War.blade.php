@extends('layouts.headerg')
@section('title')
God of War
@endsection
@section('link')
 <link rel="stylesheet" href="css/style — god of war.css" />
@endsection
@section('logo')
 <a href="#" class="image"><img src="images/logogod.png" alt="" /></a>
@endsection
@section('content')
<h1><a href="#">God of War</a></h1>
<h2><a>
"Более опытный воин может выиграть бой. 
Но войны выигрывают те, кто готов пожертвовать всем ради победы.".</a></h2>
</header>
@foreach($God as $Go)
<a href="#" class="image"><img src="{{$Go->img_url}}" alt="" /></a>
<h2><a>{{$Go->title}}</a></h2>
<p>
{{$Go->description}}
</p>
<header>
<hr>
@endforeach								
</div>
<div class="pic1">
<hr>
<header>
<footer>
<a href="http://127.0.0.1:8000/Days_Gone" class="button">Предыдущая</a>
<a href="http://127.0.0.1:8000/index" class="button">Главное Меню</a>
<a href="http://127.0.0.1:8000/Bloodborne" class="button">Следующая</a>
</footer>
</section>
<hr>
<section>
<header>
<h2><a href="#">Оценки от игровых изданий</a></h2>
<hr>
</header>
<div class="polozenie">
<div class="pic1">
<a href="#" class="image fit"><img src="images/100.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Easy Allies</a></h2>
<p>God of War - это не просто следующий шаг для франшизы, а для всей индустрии видеоигр.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/100.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Gaming Age</a></h2>
<p>Новое начало Кратоса полно сердца, наполнено действием и, безусловно, является одной из лучших игр этого поколения.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/95.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>LEVEL (Czech Republic)</a></h2>
<p>Возвращение разъяренного спартанского воина было сделано хорошо. God of War уже является великим претендентом на игру года, и вы не должны пропустить это.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/93.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>GameCrate</a></h2>
<p>God of War - это новое начало для Кратоса, другая игра, но все же одна из лучших записей в серии и одна из лучших игр этого поколения.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/90.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Slant Magazine</a></h4>
<p>Создавая вдумчивую сказку о человеке, борющемся с тем, чтобы превзойти свои грехи, чтобы удержать их от своего ребенка, новый Бог Войны уже превзошел свои кровавые корни.</p>
<hr>
</div>
</section>
</div>
<div class="polozenie">
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifgod5.gif" alt="" /></a>
<header>
<h2><a>Продажи</a></h2>
</header>
<hr>
<p>
За первые 3 дня после релиза, игра была продана в количестве 3,1 млн копий. За первый месяц продаж — 5 млн. В данный момент этот показатель превысил 10 млн.</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifgod7.gif" alt="" /></a>
<header>
<h2><a>Игра Года</a></h2>
</header>
<hr>
<p>
На церемонии награждения The Game Awards 2018, God of War победила в номинациях - "Игра года", а так же  "Лучшая игра в жанре action-adventure" , "Лучшее игровое направление".</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifgod6.gif" alt="" /></a>
<header>
<h2><a>Кори Барлог об God of War</a></h2>
</header>
<hr>
<p>
Кори Барлог — креативный директор SIE Santa Monica Studio.
<p>
"Это было... очень необычно... и одновременно трогательно. Если честно, я не ожидал, что настолько расчувствуюсь от мнений журналистов. Это застало меня врасплох.
Я снял десятиминутное видео с собственной реакцией, восемь из этих минут я плакал, не в силах произнести ни одного внятного слова, настолько я был горд нашей командой, 
которая успешно пережила пять сложнейших лет разработки игры".
</p>
</p>
@endsection