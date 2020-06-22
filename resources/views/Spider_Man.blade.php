@extends('layouts.headerg')
@section('title')
Spider Man
@endsection
@section('link')
<link rel="stylesheet" href="css/style — spider man.css" />
@endsection
@section('logo')
<a href="#" class="image"><img src="images/logospider.png" alt="" /></a>
@endsection
@section('content')
<h1><a href="#">Spider Man</a></h1>
<h2><a>
"Чтобы изменить мир, нужно быть человеком, который готов принимать самые трудные решения."</a></h2>
</header>
@foreach($Spider as $sp)
<a href="#" class="image"><img src="{{$sp->img_url}}" alt="" /></a>
<h2><a>{{$sp->title}}</a></h2>
<p>
{{$sp->description}}
</p>
<header>
<hr>
@endforeach								
</div>
<div class="pic1">
<hr>
<header>
<footer>
<a href="http://127.0.0.1:8000/The_Last_of_Us" class="button">Предыдущая</a>
<a href="http://127.0.0.1:8000/index" class="button">Главное Меню</a>
<a href="http://127.0.0.1:8000/Uncharted_4" class="button">Следующая</a>
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
<p>Spider-Man - великолепно настроенный экшн с потрясающей историей, великолепными действиями и игровым механизмом, который не надоест вам ни минуты.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/95.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Vgames</a></h2>
<p>Человек-паук превзошел мои ожидания во всех отношениях. У него есть свои низкие оценки, но они настолько незначительны, что становятся незначительными перед лицом многих положительных моментов.
<hr>
</p>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/93.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>LevelUp</a></h2>
<p>Игра не только выполняет то, что обещала, но и дает нам оригинальную историю, достойную фильма Marvel.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/90.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Vandal</a></h2>
<p>Человек-паук, вероятно, лучшая игра Insomniac и лучшая игра Человека-паука на сегодняшний день. Великое приключение, которым могут наслаждаться все, и поклонники супергероя будут любить.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/87.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>IGN</a></h4>
<p>Открытый мир Wall Crawler не всегда доставляет волнующие моменты его основной кампании, но фундамент, заложенный здесь, несомненно, впечатляет.</p>
<hr>
</div>
</section>
</div>
<div class="polozenie">
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifspider6.gif" alt="" /></a>
<header>
<h2><a>«Ограбление»</a></h2>
</header>
<hr>
<p>
«Ограбление» дает начало новому приключению Человека-паука, растянувшемуся на три 
главы комплекта дополнений «Человек-Паук: Город, который никогда не спит». После 
сообщения о грабеже в художественном музее Человек-паук и Мэри Джейн узнают, что там 
побывала бывшая пассия Питера Паркера – Фелиция Харди, более известная как Черная Кошка.</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifspider7.gif" alt="" /></a>
<header>
<h2><a>«Войны банд»</a></h2>
</header>
<hr>
<p>
История второго дополнения начинается практически сразу после первого. После того переполоха,
который был устроен Черной кошкой, в девичестве – Фелицией Харди, Кувалда решается на отчаянный и 
рисковый шаг – прибрать город к рукам и избавиться от семьи Маджии. Как мы знаем, бандитские разборки 
никогда не шли на пользу городу, как следствие – жертвы среди мирного населения и полиции, огромный 
объем работы у парня в красно-синем трико и толпы, огромные толпы врагов!</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifspider8.gif" alt="" /></a>
<header>
<h2><a>«Серебряный луч»</a></h2>
</header>
<hr>
<p>
По традиции сюжет нового дополнения начинается аккурат после завершения предыдущего. 
Серебряный Соболь вернулась в Нью-Йорк и жаждет расправы над Кувалдой. Поначалу даже и слушать
никого не хочет – стреляет во всех подряд и жаждет крови каждого, кто хоть сколько-то имеет отношение
к Твердолобому. Сам он, к слову, как и ожидалось, не только не погиб от руки госпожи Ватанабе,
но и превратился в некоего киборга, у которого от старины Кувалды только голова и осталась.</p>
@endsection