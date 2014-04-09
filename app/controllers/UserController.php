<?php

class UserController extends BaseController {
    
    private $signupURL = "/signup";
    
    
    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }
    
    /*
     * Login Page
     */
    public function getIndex()
    {
        if(Auth::check())
        {
            return Redirect::to('/dashboard');
        }
        else
        {
            return View::make('user.login')->with('signupURL', $this->signupURL);
        }
        
    }
    
    /*
     * User's dashboard
     */
    public function getDashboard()
    {
        if (Auth::guest())
        {
            return Redirect::to('/');
        }
        else
        {
            return View::make('user.dashboard');
        }
    }
    
    /*
     * Logout current user
     */
    public function logout()
    {
        Auth::logout();
        return Redirect::to('/')->with('message', 'You have been successfully signed out');
    }
    
    /*
     * Attempt to login user
     */
    public function postLogin() 
    {
        $rules = array(
			'email'      => 'required|email',
			'password' => 'required'
		);
        
        $credentials = array(
            'email'     => Input::get('email'),
            'password'  => Input::get('password')
        );
        
        $validator = Validator::make($credentials, $rules);
        
        /*
         * Redirect to home page with validation errors
         */
        if($validator->fails())
        {
            $errors = $validator->messages();
            return Redirect::to('/')->withErrors($errors)->withInput(Input::except('password'));
        }
        
        /*
         * Redirect authenticated user to their dashboard
         */
        else if(Auth::attempt($credentials))
        {
            return Redirect::intended('dashboard');
        }
        
        /*
         * Redirect to home page with authentication errors
         */
        else 
        {
           return Redirect::to('/')->withErrors('Invalid Credentials')->withInput(Input::except('password'));
        }
    }

}