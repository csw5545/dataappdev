@extends('layout.master')

@section('page-title')
    Login
@stop

@section('css')
    {{ HTML::style('css/login.blade.css'); }}
@stop

@section('main-content')

<div class='small-12 medium-8 medium-centered columns'>
    
    {{-- Messages --}}
    @if (Session::has('message'))
        <div class='row text-center alert-box success' id="message">{{ Session::get('message'); }}</div>
    @endif
    
    <div class="signup-panel">
        
        <p class="welcome">Please Login</p>
        
        {{-- Login Error Messages --}}
        @if ( $errors->count() > 0 )
        
        <div class='alert-box error'>
            
            <h4>The following errors have occurred:</h4>

            <ul>
                
              @foreach( $errors->all() as $message )
              
                <li>{{ $message }}</li>
                
              @endforeach
              
            </ul>  
            
        </div>
            
        @endif
        
        
        {{-- Login Form --}}
        {{ Form::open(array('url' => '/login')) }}
 
            <div class="row collapse">

              <div class="small-2 columns">

                <span class="prefix"><i class="fi-mail"></i></span>
              </div>

              <div class="small-10  columns">
                  <?php echo Form::text('email', '', array('placeholder' => 'Email')); ?>
              </div>

            </div>

            <div class="row collapse">

              <div class="small-2 columns ">

                <span class="prefix"><i class="fi-lock"></i></span>

              </div>
              <div class="small-10 columns ">

                <?php echo Form::password('password', array('placeholder' => 'Password')); ?>

              </div>

            </div>

            <section class='row'>

                <div class='small-5 columns' id='sign-up-forgot'>
                    <a href="<?php echo $signupURL; ?>">Sign Up</a>
                    <br/><br/>

                    <a href='#'>Forgot your password?</a>
                </div>

                <div class='small-7 columns'>
                     <?php echo Form::submit('Sign In', array('class' => 'button right tiny', 'id' => 'sign-in-button')) ?>
                </div>

            </section>
        
        {{ Form::close() }}
         
      </div>
    
</div>

@stop