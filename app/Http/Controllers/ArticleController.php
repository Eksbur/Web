<?php

namespace App\Http\Controllers;

use App\App\Http\Controllers;

class ArticleController extends Controller
{
     public function show()
	 {
	 return Article:all()
	 }
}
