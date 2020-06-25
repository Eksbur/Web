<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction(Request $request)
    {
    return view('index');
    }
    
    public function PL1Action(Request $request)
    {
    return view('PL1', ['PL1' => (new ArticleController())->showPl1()]);
    }
	
	public function SearchblockAction(Request $request)
    {
    return view('Searchblock', ['Searchblock' => (new ArticleController())->showPl1()]);
    }
	

    public function PL2Action(Request $request)
    {
    return view('PL2', ['PL2' => (new ArticleController())->showPL2()]);
    }
    
    public function PL3Action(Request $request)
    {
    return view('PL3', ['PL3' => (new ArticleController())->showPL3()]);
    }
    
    public function PL4Action(Request $request)
    {
    return view('PL4', ['PL4' => (new ArticleController())->showPL4()]);
    }
    
    public function BloodborneAction(Request $request)
    {
    return view('Bloodborne', ['Blood' => (new ArticleController())->showBlood()]);
    }
    
    public function Days_GoneAction(Request $request)
    {
    return view('Days_Gone', ['Days' => (new ArticleController())->showDays()]);
    }
    public function God_of_WarAction(Request $request)
    {
    return view('God_of_War', ['God' => (new ArticleController())->showGod()]);
    }
    
    public function inFamous_Second_SonAction(Request $request)
    {
    return view('inFamous_Second_Son', ['Inf' => (new ArticleController())->showInf()]);
    }
    
    public function LoginAction(Request $request)
    {
    return view('Login');
    }
    
    public function RegistrAction(Request $request)
    {
    return view('Registr');
    }
    
    public function Shadow_of_the_ColossusAction(Request $request)
    {
    return view('Shadow_of_the_Colossus', ['Shadow' => (new ArticleController())->showShadow()]);
    }
    
    public function Spider_ManAction(Request $request)
    {
    return view('Spider_Man', ['Spider' => (new ArticleController())->showSpider()]);
    }
    
    public function The_Last_of_UsAction(Request $request)
    {
    return view('The_Last_of_Us', ['Last' => (new ArticleController())->showLast()]);
    }
    
    public function Uncharted_4Action(Request $request)
    {
    return view('Uncharted_4', ['Unch' => (new ArticleController())->showUnch()]);
    }
	
	public function search(Request $request)
    {
	$articles = (new ArticleController())->search($request->search_field);
	if (is_null($articles)){
		return "Не найдено";
    }
	return view('Searchblock', ['Searchblock' => $articles]);
	}
}
