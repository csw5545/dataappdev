<?php

class VolunteerController extends BaseController
{
    
    private $signinURL = "/";
    
    /*
     * Sign up page
     */
    public function getSignup()
    {
        return View::make('volunteer.signup')->with('signinURL', $this->signinURL);
    }
   
    /*
     * Attempt to sign up volunteer
     */
    public function postSignup() 
    {
        
        $rules = array(
            'firstname'     => 'required',
            'lastname'      => 'required',
            'address'       => 'required',
            'phone'         => 'required',
			'email'         => 'required|email',
			'password'      => 'required|confirmed'
		);
        
        $validator = Validator::make(Input::all(), $rules);

        
        /*
         * Redirect to signup page with validation errors 
         */
        if($validator->fails())
        {      
            $errors = $validator->messages();
            return Redirect::to('/signup')->withErrors($errors)->withInput(Input::except('password'));
        }
        
        /*
         * Redirect to home page with signup success message
         */
        else
        {
            $user = new User();
            
            $user->first_name = Input::get('firstname');
            $user->last_name = Input::get('lastname');
            $user->address = Input::get('address');
            $user->phone = Input::Get('phone');
            $user->email = Input::Get('email');
            $user->password = Hash::make(Input::Get('password'));
            
            $user->save();
            
            
            return Redirect::to('/')->with('message', 'Thank you for registering. Please wait for approval');
        }
        
    }
    
    
}
