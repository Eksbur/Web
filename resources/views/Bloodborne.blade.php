@extends('layouts.headerg')
@section('title')
Bloodborne
@endsection
@section('link')
<link rel="stylesheet" href="css/style — bloodborne.css" />
@endsection
@section('logo')
<a href="#" class="image"><img src="images/logoblood.png" alt="" /></a>
@endsection
@section('content')
<h1><a href="#">Bloodborne</a></h1>
<h2><a>
"Мы рождаемся из крови, воспитываемся кровью, погибаем от крови. 
Нам надо открыть глаза... Бойся древней крови".</a></h2>
</header>
@foreach($Blood as $Bl)
<a href="#" class="image"><img src="{{$Bl->img_url}}" alt="" /></a>
<h2><a>{{$Bl->title}}</a></h2>
<p>
{{$Bl->description}}
</p>
<header>
<hr>
@endforeach									
</div>
<div class="pic1">
<hr>
<header>
<footer>
<a href="http://127.0.0.1:8000/God_of_War" class="button">Предыдущая</a>
<a href="http://127.0.0.1:8000/index" class="button">Главное Меню</a>
<a href="http://127.0.0.1:8000/The_Last_of_Us" class="button">Следующая</a>
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
<h2><a>LEVEL (Czech Republic)</a></h2>
<p>Bloodborne берет лучшее из Dark Souls и создает непрекращающуюся игровую задачу на основе префекта - она ​​проверит ваши способности по максимуму.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/100.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Digital Spy</a></h2>
<p>Я хочу продолжать играть, я хочу раскрыть его секреты, я хочу сражаться с каждым монстром, пробовать каждое оружие, обсуждать теории и исследовать как можно больше подземелий сообщества.
<hr>
</p>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/95.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>3DJuegos</a></h2>
<p>FromSoftware имеет уникальный стиль при создании невероятно хорошо проработанных миров. Новая система наступательных боев дает новый старт серии, и хотя она более прямолинейна в своей концепции, она не теряет ни капли глубины.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/90.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Eurogamer Poland</a></h2>
<p>Темное и увлекательное приключение с превосходной боевой системой, идеальной дозой инноваций и захватывающих исследований.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/90.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Games(TM)</a></h4>
<p>Bloodborne - невероятная игра; крепкий в своей механике, логичный в своих системах, полезный, интенсивный, великолепно разочаровывающий и в равной степени захватывающий.</p>
<hr>
</div>
</section>
</div>
<div class="polozenie">
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifblood5.gif" alt="" /></a>
<header>
<h2><a>The Old Hunters</a></h2>
</header>
<hr>
<p>
Дополнение The Old Hunters посвящено месту под названием "Кошмар охотника": сюда попадают поглощённые жаждой 
крови, тут они проводят вечность в сражениях. Не то ад, не то Вальгалла — зависит от вашей ненависти или любви к фигурной резке ржавым лобзиком по живой плоти.</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifblood6.gif" alt="" /></a>
<header>
<h2><a>Хидэтака Миядза́ки</a></h2>
</header>
<hr>
<p>
Японский разработчик компьютерных игр; глава компании FromSoftware, к которой присоединился в 2004 году. 
Известен по своим играм серии Souls, Bloodborne и Sekiro: Shadows Die Twice.</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifblood7.gif" alt="" /></a>
<header>
<h2><a>Саундтрек</a></h2>
</header>
<hr>
<p>
Работа над музыкальным сопровождением к Bloodborne велась рядом японских и 
приглашённых композиторов: Юка Китамура (ранее работавшая над Dark Souls II),
Цукаса Саито, Нобуёси Судзуки совместно с Райаном Амоном, Майклом Вандмахером и 
Крисом Веласко. В записи саундтрека участвовал оркестр из 65 человек и хор из 32. 
Релиз саундтрека отдельно от изданий в цифровом формате и на физическом носителе состоялся 21 апреля 2015.
Цифровой вариант саундтрека продаётся в различной комплектации: 21 или 25 композиций. 
Физическое издание продаётся в виде двух дисков.</p>
@endsection