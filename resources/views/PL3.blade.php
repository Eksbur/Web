@extends('layouts.header')
@section('title')
 <title> PlayStation 3 </title>
@section('content')
<h2><a href="#">PlayStation 3</a></h2>
<h4><a href="#">“Вот это жизнь!”</a></h4>
</header>
<a href="#" class="image2"><img src="images/pl3.png" alt="" /></a>
<p>
@foreach($PL3 as $PL)
<h3><a>{{$PL->title}}</a></h3>
<p>
{{$PL->description}}
</p>
<header>
<hr>
@endforeach
<div class="polozenie">
<article class="imgpl">
<a href="#" class="image"><img src="images/move.png" alt="" /></a>
<header>
<h3><a>PlayStation Move</a></h3>
</header>
<p>
<hr>
В 2009 году Sony анонсировала беспроводной контроллер (датчик движения), аналогичный Wii Remote, под названием PlayStation Move. 
Он должен был идти в комплекте с маленькой камерой (PlayStation Eye) для отслеживания движения контроллера в трёхмерном пространстве. 
Камере должен помогать шар на верхушке пульта, меняющий цвет в зависимости от местности, в которой находится. По словам Sony, они были благодарны 
Nintendo за создание революционного контроллера и утверждали, что движения PlayStation Move должны быть точнее, чем у Wii Remote.
Контроллер вышел в продажу осенью 2010 года. Наряду с Sony Computer Entertainment Worldwide Studios и дочерними компаниями,
разработкой игр для PlayStation Move занимаются 36 сторонних разработчиков.В стартовом наборе он продаётся с игрой «Праздник Спорта».
</p>
</article>
<article class="imgpl">
<a href="#" class="image"><img src="images/net.jpg" alt="" /></a>
<header>
<h3><a>PlayStation Network</a></h3>
</header>
<p>
<hr>
PlayStation Network — единый онлайн-сервис, созданный компанией Sony Computer Entertainment для PlayStation 3 и PlayStation Portable,
который был анонсирован на встрече PlayStation Business Briefing в Токио в 2006 году. Данный сервис всегда включён,
его использование является бесплатным и включает онлайн-поддержку. Сервис разрешает доступ к многопользовательскому контенту игр,
PlayStation Store, PlayStation Home и другим сервисам. PlayStation Network использует наличные и карты PlayStation Network, как средство
оплаты в магазине PlayStation Store и PlayStation Home.
</p>
</article>
<article class="imgpl">
<a href="#" class="image"><img src="images/spider.jpg" alt="" /></a>
<header>
<h3><a>Spider-man</a></h3>
</header>
<p>
<hr>
Шрифт, использованный для написания названия консоли PlayStation 3 первых версий, известен под названием Spider-man font,
так как изначально использовался для отображения заголовков фильмов серии Spider-Man, права на производство которых принадлежат Sony.
Она же обладает правами и на использование данного шрифта, Кэн Кутараги лично настоял на том, чтобы этот же шрифт использовался и для отображения названия приставки.
От использования Spider-man font компания отказалась в 2009 году, заявив, что хочет дать бренду новое направление.
</p>
@endsection