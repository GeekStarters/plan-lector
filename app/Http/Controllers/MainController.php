<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\AuthParseController;

class MainController extends AuthParseController{


    public function home(){
        if(!$this->isLogin()){
            return redirect('/login');
        }
        return view('home');
    }

    public function getLogin(){
        if($this->isLogin()){
            return redirect('/home');
        }
        return view('auth.login');
    }

    public function setLogin(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $login = $this->login($credentials);
        if(!$login){
            return redirect('/')->with('error', 'Invalid credential!');
        }else{
            return redirect('/home');
        }
    }

    public function setLogout(){
        $this->isLogin();
        if($this->logout()){
            return redirect('/');
        }else{
            return redirect('/home');
        }
    }

}
