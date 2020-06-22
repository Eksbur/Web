@extends('layouts.header')
@section('title')
PlayStation 1 </title>
@endsection
@section('content')
<h2><a href="#">PlayStation 1</a></h2>
<h4><a href="#">«Живи в своём мире. Играй в нашем»</a></h4>
</header>
<a href="#" class="image2"><img src="images/pl1.png" alt="" /></a>
@foreach($PL1 as $PL)
<h3><a>{{$PL->title}}</a></h3>
<p>
{{$PL->description}}
</p>
<header>
<hr>
@endforeach
<div class="polozenie">
<article class="imgpl">
<a href="#" class="image"><img src="images/fat.jpg" alt="" /></a>
<header>
<h3><a>«Отец PlayStation»</a></h3>
</header>
<p>
<hr>
Кэн Кутараги - бывший председатель, главный исполнительный директор и основатель Sony Computer Entertainment.
в настоящее время президент и исполнительный директор Cyber AI Entertainment. 
Он также является членом совета таких компаний, как Kadokawa Group Holdings, Nojima Corporation и Rakuten.
</p>
</article>
<article class="imgpl">
<a href="#" class="image"><img src="images/dl1.png" alt="" /></a>
<header>
<h3><a>DualShock</a></h3>
</header>
<p>
<hr>
Семейство контроллеров компании Sony начало развитие в 1994 году с выходом игровой приставки PlayStation. 
Первоначально контроллер (тогда ещё без названия) не имел аналоговых стиков, 
они появились во втором поколении — у модели Dual Analog, предшественницы DualShock.
</p>
</article>
<article class="imgpl">
<a href="#" class="image"><img src="images/game1.jpg" alt="" /></a>
<header>
<h3><a>Игры</a></h3>
</header>
<p>
<hr>
На момент 30 сентября 2007 года во всем мире было выпущено 7918 наименований игр и другого программного обеспечения для PlayStation 
общим количеством 961 миллион штук. Последней игрой, выпущенной в Соединенных Штатах стала FIFA Football 2005.
</p>
@endsection