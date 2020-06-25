<?php

namespace App\Http\Controllers;
use App\New;
use App\App\Http\Controllers;

class NewController extends Controller
{
    public function showPl1e()
	 {
		return Article::where('status', 13)->get();
	 }
}
