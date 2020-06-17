<?php

namespace App\Http\Controllers;
use App\Article;
use App\App\Http\Controllers;

class ArticleController extends Controller
{
     public function show()
	 {
		dump (Article::all());
	 }
}
