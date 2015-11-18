<?php


use Illuminate\Http\Request;
use Illuminate\Http;


class SessionController extends \BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	protected $value;
	

	public function __construct(Request $request)
    {
        $this->request = $request;
        Session::put('key', 'value');

    }

	public function session_show()
    {
    	
        
        //$data = $this->$request->session()->all();
        $data = Session::all();
        return View::make('hello')->with('data',$data);
        //return View::make('hello');
    }
    public function session_get()

    {
    	$value = $request->session()->get('key');
    	$data = $request->session()->all();
    	return $data;


    }
    public function session_save(){


    }
    
  
}
