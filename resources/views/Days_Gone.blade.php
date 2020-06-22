@extends('layouts.headerg')
@section('title')
Days Gone
@endsection
@section('link')
 <link rel="stylesheet" href="css/style — Days Gone.css" />
@endsection
@section('logo')
 <a href="#" class="image"><img src="images/logodays.png" alt="" /></a>
@endsection
@section('content')
<h1><a href="#">Days Gone</a></h1>
<h2><a>
"Голодных патриотов не бывает.."</a></h2>
</header>
@foreach($Days as $da)
<a href="#" class="image"><img src="{{$da->img_url}}" alt="" /></a>
<h2><a>{{$da->title}}</a></h2>
<p>
{{$da->description}}
</p>
<header>
<hr>
@endforeach								
</div>
<div class="pic1">
<hr>
<header>
<footer>
<a href="http://127.0.0.1:8000/inFamous_Second_Son" class="button">Предыдущая</a>
<a href="http://127.0.0.1:8000/index" class="button">Главное Меню</a>
<a href="http://127.0.0.1:8000/God_of_War" class="button">Следующая</a>
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
<h2><a>Daily Star</a></h2>
<p>
Великолепный бой с зомби и приятный игровой процесс на мотоцикле прекрасно сочетаются с динамичной историей. Но основные моменты игры - это ужасные орды зомби, которые не похожи ни на что, что можно было увидеть в видеоиграх.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/85.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Worth Playing</a></h2>
<p>Даже со всей рекламой, которую мы наблюдаем сейчас, Days Gone по-прежнему несет в себе ауру названия, которое может быть ошибочно и, возможно, пропущено с первого взгляда, как это было для меня несколько лет назад. 
<hr>
</p>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/80.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Gamer.nl</a></h2>
<p>Days Gone - это смесь множества игр с открытым миром и зомби. Несмотря на то, что игровой процесс остается практически одинаковым на протяжении всей игры, игра, катание на мотоцикле и биты на выживание делают эту игру достойной внимания.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/75.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Everyeye.it</a></h2>
<p>В игре есть слабые системы стрельбы и плохое оружие, очень похожее на Red Dead Redemption II. Но в то время как другие игры были высоко оценены, у Days Gone ноги были отрезаны жуками.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/70.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>USgamer</a></h4>
<p>Days Gone - отличная основа для чего-то лучшего, так что, надеюсь, у Бенда есть шанс улучшить его.</p>
<hr>
</div>
</section>
</div>
<div class="polozenie">
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifdays7.gif" alt="" /></a>
<header>
<h2><a>Bend Studio</a></h2>
</header>
<hr>
<p>
  Американская частная компания, специализирующаяся на разработке компьютерных игр. Основана в 1993 году. Штаб-квартира расположена в США, в городе Бенд. Дочерняя компания Sony Interactive Entertainment. 
  Последней разработанной игрой компании стала Days Gone для Playstation 4, полноценное производство которой началось в 2015 году, а выход в 2019.</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifdays6.gif" alt="" /></a>
<header>
<h2><a>Саундтрек</a></h2>
</header>
<hr>
<p>
Музыкальное сопровождение к игре было написано композитором Нэйтаном Уайтхедом. В саундтреке также представлены такие исполнители как 
Джек Саворетти, Билли Раффул, Зандер Риз, а также вокалист и автор песен Льюис Капальди. Выход саундтрека из 25 композиций состоялся 19 апреля 2019 года в виде цифрового скачивания через музыкальные стриминговые сервисы Apple Music, Google Play Music и Spotify.</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifdays8.gif" alt="" /></a>
<header>
<h2><a>Оценки и мнения</a></h2>
</header>
<hr>
<p>
Игра получила в основном «смешанные отзывы» от критиков и рецензентов различных изданий согласно данным агрегатора Metacritic. Средний балл 
оценок игры составляет 71 балл из 100 на основе 108 рецензий от различных изданий. На другом сайте агрегаторе рецензий OpenCritic, средний балл основанный на 130 рецензиях, также составил 71 балл из 100 возможных.</p>
@endsection