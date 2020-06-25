<?php

namespace App\Http\Controllers;
use App\Article;
use App\App\Http\Controllers;

class ArticleController extends Controller
{
     public function showPl1()
	 {
		return Article::where('status', 1 and 'status', 13)->get();
	 }
	 
	 public function showsearch()
	 {
		return Article::where('status', 1)->get();
	 }
	 
	 public function showPL2()
	 {
		return Article::where('status', 2)->get();
	 }
	 
	 public function showPL3()
	 {
		return Article::where('status', 3)->get();
	 }
	 
	 public function showPL4()
	 {
		return Article::where('status', 4)->get();
	 }
	 
	 public function showGod()
	 {
		return Article::where('status', 5)->get();
	 }
	 
	 public function showBlood()
	 {
		return Article::where('status', 6)->get();
	 }
	 public function showLast()
	 {
		return Article::where('status', 7)->get();
	 }
	 
	 public function showSpider()
	 {
		return Article::where('status', 8)->get();
	 }
	 
	 public function showUnch()
	 {
		return Article::where('status', 9)->get();
	 }
	 
	 public function showShadow()
	 {
		return Article::where('status', 10)->get();
	 }
	 
	 public function showInf()
	 {
		return Article::where('status', 11)->get();
	 }
	 
	 public function showDays()
	 {
		return Article::where('status', 12)->get();
	 }
	 
	 public function shownew1()
	 {
		return Article::where('status', 13)->get();
	 }
	 
	 public function search($title)
	 {
		return Article::where('title','like',  '%'.$title.'%')->get();
	 }
}
