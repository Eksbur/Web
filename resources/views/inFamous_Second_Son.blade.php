@extends('layouts.headerg')
@section('title')
inFamous: Second Son
@endsection
@section('link')
<link rel="stylesheet" href="css/style — infamos.css" />
@endsection
@section('logo')
<a href="#" class="image"><img src="images/logoinf.png" alt="" /></a>
@endsection
@section('content')
<h1><a href="#">inFamous: Second Son</a></h1>
<h2><a>
"Человек нервничает в двух случаях: либо он трус, либо ему есть что скрывать."</a></h2>
</header>
@foreach($Inf as $in)
<a href="#" class="image"><img src="{{$in->img_url}}" alt="" /></a>
<h2><a>{{$in->title}}</a></h2>
<p>
{{$in->description}}
</p>
<header>
<hr>
@endforeach								
</div>
<div class="pic1">
<hr>
<header>
<footer>
<a href="http://127.0.0.1:8000/Shadow_of_the_Colossus" class="button">Предыдущая</a>
<a href="http://127.0.0.1:8000/index" class="button">Главное Меню</a>
<a href="http://127.0.0.1:8000/Days_Gone" class="button">Следующая</a>
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
<h2><a>COGconnected</a></h2>
<p>
Second Son - это лучшая игра, которую когда-либо выпускал Sucker Punch, лучшая игра на PS4, доступная на данный момент, и, безусловно, единственная игра, которую должен приобрести каждый владелец PS4.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/90.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>TheSixthAxis</a></h2>
<p>Он не слишком сильно отклоняется от проторенного пути серии, но есть улучшения в игровом процессе и некоторые потрясающие эффекты, которые могут быть использованы для создания самой забавной и самой 
привлекательной игры для PS4, хотя повествование может не имеет того же эффекта, что и в предыдущих играх, это несколько более приземленный рассказ об обычном человеке с необычайными способностями, 
и это захватывающее новое направление для серии.
<hr>
</p>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/87.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>IGN</a></h2>
<p>Он играет великолепно, и выглядит даже лучше, но его достижения также требуют от него более высоких стандартов, которые его целые системы и системы морали пытаются достичь.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/80.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Everyeye.it</a></h2>
<p>Время от времени Infamous Second Son доставляет большое удовольствие своей боевой механикой, но повторяющуюся формулу в сочетании с некоторыми сбоями и проблемами балансировки,
 в конечном счете, нельзя игнорировать. Это интересное и визуально красивое программное обеспечение, но оно могло бы быть намного больше.</p>
<hr>
</div>
<div class="pic1">
<a href="#" class="image fit"><img src="images/80.png" alt="" /></a>
</div>
<div class="pic2">
<h2><a>Eurogamer</a></h4>
<p>Второй сын лучше, чем первые две игры: он быстрее и гораздо приятнее. Жаль, что Sucker Punch не смог сделать его лучшим в жанре из-за нескольких промахов и неточного поведения.</p>
<hr>
</div>
</section>
</div>
<div class="polozenie">
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifinf7.gif" alt="" /></a>
<header>
<h2><a>inFamous: First Light</a></h2>
</header>
<hr>
<p>
 Это отдельная загружаемая контентно -приключенческая видеоигра, разработанная компанией Sucker Punch Productions и выпущенная Sony Computer Entertainment для
 PlayStation 4 . Игра была анонсирована на выставке Electronic Entertainment Expo 2014 и была выпущена в августе 2014 года, физическая версия игры была выпущена только в Европе и Австралии.</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifinf6.gif" alt="" /></a>
<header>
<h2><a>Продажи</a></h2>
</header>
<hr>
<p>
Продажи inFamous: Second Son за первые девять дней составили больше одного миллиона копий, 
что делает Second Son одной из самых продаваемых игр на PlayStation 4, а также самой распродаваемой игрой в серии.</p>
</article>
<article class="imgpl">
<a href="#" class="image3"><img src="images/gifinf8.gif" alt="" /></a>
<header>
<h2><a>Paper Trail</a></h2>
</header>
<hr>
<p>
Бесплатное DLC с функциям «альтернативной реальности». История разделена на шесть частей, и в ней рассказывается о маленькой девочке Челии, обладающей «бумажной» способностью. Каждая часть выходила с 28 марта каждую пятницу. Выпуск заключительной части состоялся 25 апреля 2014 года.</p>
@endsection