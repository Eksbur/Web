@extends('layouts.headerg')
@section('title')
Uncharted 4 </title>
@endsection
@section('link')
<link rel="stylesheet" href="css/style — Uncharted 4.css" />
@endsection
@section('logo')
 <a href="#" class="image"><img src="images/logounch.png" alt="" /></a>
@endsection
@section('content')
<h1><a href="#">Uncharted 4</a></h1>
<h2><a>
"У каждого сокровища своя цена."</a></h2>
</header>
@foreach($Unch as $un)
<a href="#" class="image"><img src="{{$un->img_url}}" alt="" /></a>
<h2><a>{{$un->title}}</a></h2>
<p>
{{$un->description}}
</p>
<header>
<hr>
@endforeach								
</div>
<div class="pic1">
<hr>
<header>
<footer>
<a href="http://127.0.0.1:8000/Spider_Man" class="button">Предыдущая</a>
<a href="http://127.0.0.1:8000/index" class="button">Главное Меню</a>
<a href="http://127.0.0.1:8000/Shadow_of_the_Colossus" class="button">Следующая</a>
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
<h2><a>Telegraph</a></h2>
<p>Это шумный материал. Здесь нет большой иллюзии; любой риск, который, возможно, был связан с представлением Натана Дрейка десять лет назад, давно ушел, сметенный потоком радующего зрителей зрелища.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/100.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Examiner</a></h2>
<p>Naughty Dog создала блестящую игру, которая может стоять в одиночестве как лучшая игра на PlayStation 4. Uncharted когда-то называли клоном Tomb Raider, но он оказался убийцей Tomb Raider. 
<hr>
</p>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/100.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Easy Allies</a></h2>
<p>Uncharted 4 - знаковое название, в которое должен вкладываться каждый, кто интересуется интерактивным рассказыванием историй. Naughty Dog снова поднял планку в отрасли.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/95.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Game Informer</a></h2>
<p> The Thief End's - лучший из Uncharted, в котором рассказывается история, которую я не хотел заканчивать, и приключение, которое заканчивается адской выплатой.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/90.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Games.cz</a></h4>
<p>Uncharted 4 - это как книга, которую вы буквально проглатываете страницу за страницей, но в то же время вам грустно видеть уменьшение числа непрочитанных страниц.</p>
<hr>
</div>
</section>
</div>
<div class="polozenie">
<article class="imgpl">
<a href="#" class="image3"><img src="images/unchgif6.gif" alt="" /></a>
<header>
<h2><a>Релиз и продажи</a></h2>
</header>
<hr>
<p>
Выход игры состоялся 10 мая 2016 года, одновременно во всём мире. Игра доступна в трёх вариантах изданий
помимо стандартного. Special Edition, Libertalia Collector’s Edition и цифровом Digital Standard Edition.
Всего за неделю с релиза игра продалась по всему миру в количестве в 2,7 млн копий и 
стала самой быстро продаваемой игрой в истории серии. В мае Uncharted 4 возглавил чарт 
продаж видеоигр на территории США и Великобритании. На 21 декабря 2016 года игра продалась
по всему миру в количестве более 8,7 млн копий, что делает её самой продаваемой игрой в истории студии.</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/unchgif7.gif" alt="" /></a>
<header>
<h2><a>Uncharted: The Lost Legacy</a></h2>
</header>
<hr>
<p>
Первоначально The Lost Legacy задумывался как загружаемое дополнение к игре Uncharted 4: A Thief’s End, 
однако позже перерос в самостоятельный проект. Сюжет игры является спин-оффом, он повествует о Хлое 
Фрейзер и ее напарнице Надин Росс, которые отправляются в Западную Индию на поиски Бивня Ганеши. 
По словам Нила Дракмана, после окончания разработки Uncharted: The Lost Legacy все сотрудники 
Naughty Dog трудятся над The Last of Us Part II.</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/unchgif5.gif" alt="" /></a>
<header>
<h2><a>Дорога на большой экран</a></h2>
</header>
<hr>
<p>
И напоследок вспомним об экранизации игры, которая за десять лет так и не добралась до старта 
съемок, сменив трех режиссеров и шесть сценаристов. Точнее, уже семь: Джо Карнахан 
(«Козырные тузы», «Команда «А») тоже покинул проект. Переписывать сценарий теперь будет
Рейф Джадкинс («Агенты «Щ.И.Т.»).
Режиссером пока остается Шон Леви («Живая сталь»), который хочет сохранить дух серии, но
при этом сделать из Uncharted нового «Индиану Джонса» для тех, кто не успел вырасти на
трилогии о знаменитом археологе. Сам фильм станет приквелом к игровой серии — Нил Дракманн 
считает, что это намного более удачная идея, чем перенос на экраны одной из игр.</p>
@endsection