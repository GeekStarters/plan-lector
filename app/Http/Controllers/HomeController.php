<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */



	public function index()
	{
		return view('home');
	}

    public function ebooks()
    {
        return view('ebooks.index');
    }

    public function booksCreate(){
        return view('ebooks.create');
    }

    public function ranking()
    {
        return view('games.ranking');
    }

    public function prices()
    {
        return view('games.prices');
    }

    public function sales()
    {
        return view('stats.sale');
    }

    public function users()
    {
        return view('stats.users');
    }

    public function messages()
    {
        return view('messages.index');
    }

    public function usersAdmin(){
        return view('admin.users');
    }

    public function roles(){
        return view('admin.roles');
    }


}
