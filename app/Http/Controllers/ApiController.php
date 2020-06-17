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
    return view('PL1');
    }
    
    public function PL2Action(Request $request)
    {
    return view('PL2');
    }
    
    public function PL3Action(Request $request)
    {
    return view('PL3');
    }
    
    public function PL4Action(Request $request)
    {
    return view('PL4');
    }
    
    public function BloodborneAction(Request $request)
    {
    return view('Bloodborne');
    }
    
    public function Days_GoneAction(Request $request)
    {
    return view('Days_Gone');
    }
    public function God_of_WarAction(Request $request)
    {
    return view('God_of_War');
    }
    
    public function inFamous_Second_SonAction(Request $request)
    {
    return view('inFamous_Second_Son');
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
    return view('Shadow_of_the_Colossus');
    }
    
    public function Spider_ManAction(Request $request)
    {
    return view('Spider_Man');
    }
    
    public function The_Last_of_UsAction(Request $request)
    {
    return view('The_Last_of_Us');
    }
    
    public function Uncharted_4Action(Request $request)
    {
    return view('Uncharted_4');
    }
	
	public function getArticles(Request $request)
    {
	return (new ArticleController())->show();
    }
}
