<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use Parse\ParseClient;
use Parse\ParseException;
use Parse\ParseUser;

use App\MyParse\ParseLaravelSessionStorage;

class AuthParseController extends Controller {

    public function __construct()
    {
        ParseClient::setStorage(new ParseLaravelSessionStorage());
    }

    public function login($credentials)
    {
        try {
            if(ParseUser::logIn($credentials['email'], $credentials['password'])){
                return true;
            }else{
                return false;
            }
        } catch(ParseException $ex) {
            return false;
        }
    }

    public function logout(){
        try{
            if(ParseUser::logOut()){
                return true;
            }else{
                return false;
            }
        }catch (ParseException $error){
            return false;
        }
    }

    public function isLogin(){
        if(Session::has('parseData.user')){
            return true;
        }else{
            return false;
        }
    }

    public function profile(){
        dd(Session::all());
    }
}
