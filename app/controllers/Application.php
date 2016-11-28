<?php

/**
 * Created by IntelliJ IDEA.
 * User: Alexis
 * Date: 24/11/16
 * Time: 12:24
 */

use Illuminate\Http\RedirectResponse;

class Application extends BaseController {

    public function Login(){
        return View::make('login');
    }

    public function Home(){
        return View::make('home', array('testData'=>'testString'));
    }


    public function LoginAttempt()
    {
        try {
            if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')."soko"),true)) {
                return Redirect::action('Application@Home');
            } else {
                return array('error'=>true,'message'=>'Datos incorrectos.','data'=>null);
            }
        } catch(Exception $e) {
            return array('error'=>true,'message'=>'Error en la petición.','data'=>$e);
        }
    }

}