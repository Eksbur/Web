@extends('layouts.headerg')
@section('title')
The Last of Us
@endsection
@section('link')
<link rel="stylesheet" href="css/style — the last of us.css" />
@endsection
@section('logo')
<a href="#" class="image"><img src="images/logolast.png" alt="" /></a>
@endsection
@section('content')
<h1><a href="#">The Last of Us</a></h1>
<h2><a>
"От прошлого не убежишь и не скроешься. 
Оно настигнет в любом случае, потому что оно — часть тебя..."</a></h2>
</header>
@foreach($Last as $la)
<a href="#" class="image"><img src="{{$la->img_url}}" alt="" /></a>
<h2><a>{{$la->title}}</a></h2>
<p>
{{$la->description}}
</p>
<header>
<hr>
@endforeach									
</div>
<div class="pic1">
<hr>
<header>
<footer>
<a href="http://127.0.0.1:8000/Bloodborne" class="button">Предыдущая</a>
<a href="http://127.0.0.1:8000/index" class="button">Главное Меню</a>
<a href="http://127.0.0.1:8000/Spider_Man" class="button">Следующая</a>
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
<h2><a>SpazioGames</a></h2>
<p>Шедевр, который преодолевает навязанные самим собой барьеры игрового повествования и завораживает игрока интеллектуальным геймплеем.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/100.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>GameOver.gr</a></h2>
<p>Шедевр повествования и современный игровой дизайн.
<hr>
</p>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/90.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Joystiq</a></h2>
<p>The Last of Us не веселая история, но чертовски хорошая.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/97.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Meristation</a></h2>
<p>The Last of Us - это действительно другая игра, сочетающая в себе традиционные приключения, выживание, экшн, скрытность и постоянное исследование.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/95.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Gamer.nl</a></h4>
<p>С The Last of Us разработчик Naughty Dog переходит от простого развлечения Uncharted к более серьезным вещам.</p>
<hr>
</div>
</section>
</div>
<div class="polozenie">
<article class="imgpl">
<a href="#" class="image3"><img src="images/giflast6.gif" alt="" /></a>
<header>
<h2><a>The Last of Us: Left Behind</a></h2>
</header>
<hr>
<p>
Сюжет игры рассказывает о прошлом Элли и её подруге Райли, параллельно затрагивая события, которые происходили во время
сюжетного повествования одиночной кампании в The Last of Us. События дополнения происходят как в прошлом Элли (до встречи с Джоэлом),
так и во время столкновения с группой каннибалов в университете. История игры рассказывает о событиях, произошедших с героинями за три
недели до сюжета оригинальной игры, а также параллельный рассказ о том, через что прошла Элли, чтобы спасти умирающего Джоэла.</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/giflast8.gif" alt="" /></a>
<header>
<h2><a>The Last of Us Part II</a></h2>
</header>
<hr>
<p>
12 июня 2018 года продолжение было представлено на выставке E3 2018, где впервые был показан игровой 
процесс сиквела. Критики позитивно оценили графику и геймплей, заявив, что The Last of Us Part II по 
некоторым критериям превзойдет своего предшественника. В январе 2017 года The Last of Us Part II получил 
свою первую премию от PlayStation Blog в категории «Самая ожидаемая игра года». Позже в том же году игра
принесла своим разработчикам премию Most Wanted Game от Golden Joystick Awards, и Most Anticipated Game на
The Game Awards. 2 июля 2018 года была присуждена очередная премия в номинации «Специальная награда за 
графику и звук» на церемонии награждения Game Critics Awards.</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/giflast2.gif" alt="" /></a>
<header>
<h2><a>Игра Десятилетия</a></h2>
</header>
<hr>
<p>
Главной игрой 2010-х пользователи официального блога PlayStation признали The Last of Us. Персонажи, драма и жуткий экшен в
 знаковом эксклюзиве платформы оставили у геймеров настолько большие впечатления, что в итоге проект студии Naughty Dog получил
 свыше 11% всех голосов, став обладателем заслуженной "платиновой" награды.</p>
@endsection