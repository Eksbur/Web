@extends('layouts.headerg')
@section('title')
Shadow of the Colossus
@endsection
@section('link')
<link rel="stylesheet" href="css/style — Shadow of the Colossus.css" />
@endsection
@section('logo')
<a href="#" class="image"><img src="images/logosgadow.png" alt="" /></a>
@endsection
@section('content')
<h1><a href="#">Shadow of the Colossus</a></h1>
<h2><a>
"Тень Колосса"</a></h2>
</header>
@foreach($Shadow as $sh)
<a href="#" class="image"><img src="{{$sh->img_url}}" alt="" /></a>
<h2><a>{{$sh->title}}</a></h2>
<p>
{{$sh->description}}
</p>
<header>
<hr>
@endforeach									
</div>
<div class="pic1">
<hr>
<header>
<footer>
<a href="http://127.0.0.1:8000/Uncharted_4" class="button">Предыдущая</a>
<a href="http://127.0.0.1:8000/index" class="button">Главное Меню</a>
<a href="http://127.0.0.1:8000/inFamous_Second_Son" class="button">Следующая</a>
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
<h2><a>Games Master UK</a></h2>
<p>
Свежий слой краски украшает и без того вечную классику, которая до сих пор ощущается как глоток свежего воздуха сегодня.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/100.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Gamer.no</a></h2>
<p>Вечный шедевр, который получил уважение и любовь, которых он заслуживает в этой новой версии.
<hr>
</p>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/95.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>GameCrate</a></h2>
<p>Shadow of the Colossus - настоящий шедевр сверху донизу, и он наверняка запомнится как одна из величайших игр, когда-либо созданных.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/90.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>GameSpot</a></h2>
<p> Тень Колосса - это потрясающее путешествие, и его стоит взять и взять заново.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/90.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Gamersky</a></h4>
<p>Концепция Тени Колосса уникальна и полна шарма. Обновленная версия для PS4 замечательна, что означает, что она является идеальным выбором для всех, кто хочет попробовать ее, независимо от того, являетесь ли вы фанатом или новым игроком. </p>
<hr>
</div>
</section>
</div>
<div class="polozenie">
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifshadow6.gif" alt="" /></a>
<header>
<h2><a>Музыкальное оформление</a></h2>
</header>
<hr>
<p>
Музыка в Shadow of the Colossus звучит в сюжетных роликах и во время сражений с колоссами — 
простые путешествия по игровому миру проходят в тишине. 7 декабря 2005 года в Японии был выпущен диск с 
официальным саундтреком под названием «Roar of the Earth», куда вошли тридцать пять игровых композиций и 
ещё семь дополнительных. Музыку, сочетающую звучание струнных, барабанных и духовых инструментов, написал композитор Ко 
Отани (яп. 大谷 幸, Отани Ко), известный по своим работам в аниме[25]. «Roar of the Earth» победил в номинации «Саундтрек Года» (
англ. Soundtrack of the Year) по версии американского журнала Electronic Gaming Monthly[26].</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifshadow7.gif" alt="" /></a>
<header>
<h2><a>Оценка</a></h2>
</header>
<hr>
<p>
В отличие от Ico, высоко оценённой, но провалившейся на основных рынках игры, Shadow of the Colossus стал коммерчески успешным проектом. 
За первую неделю он разошёлся тиражом в 140 000 копий и занял первое место в японских чартах продаж. 8 августа 2006 года игра была внесена
 в лист величайших хитов Sony (англ. List of Sony Greatest Hits games).
Shadow Of The Colossus получила премию BAFTA в области игр 2006 года в номинациях 
«Action And Adventure sponsored by PC World» и «Artistic Achievement».</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifshadow8.gif" alt="" /></a>
<header>
<h2><a>Фумито Уэда</a></h2>
</header>
<hr>
<p>
Японский геймдизайнер, сценарист и продюсер разработки компьютерных игр. Известен как создатель игр Ico (2001), Shadow of the Colossus (2005), The Last Guardian (2016).</p>
@endsection