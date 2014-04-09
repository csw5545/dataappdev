@extends('layout.master')

@section('css')
    {{ HTML::style('css/login.blade.css'); }}
@stop

@section('main-content')

<div class='small-12 medium-8 medium-centered columns'>
    
    <div class="signup-panel">
        
        <p class="welcome">Volunteer Sign Up</p>
        
        {{-- Signup Error Messages --}}
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
        
        
        {{ Form::open(array('url' => '/signup')) }}
        
            <div class="row collapse">

              <div class="small-2 columns">

                <span class="prefix"><i class="fi-torsos"></i></span>
              </div>

              <div class="small-10  columns">
                  <?php echo Form::text('firstname', '', array('placeholder' => 'First Name')); ?>
              </div>

            </div>
        
            <div class="row collapse">

                <div class="small-2 columns">

                  <span class="prefix"><i class="fi-torsos"></i></span>
                </div>

                <div class="small-10  columns">
                    <?php echo Form::text('lastname', '', array('placeholder' => 'Last Name')); ?>
                </div>

            </div>

            <div class="row collapse">

                  <div class="small-2 columns">

                    <span class="prefix"><i class="fi-address-book"></i></span>
                  </div>

                  <div class="small-10  columns">
                      <?php echo Form::text('address', '', array('placeholder' => 'Home Address')); ?>
                  </div>

            </div>
        
            <div class="row collapse">

                  <div class="small-2 columns">

                    <span class="prefix"><i class="fi-telephone"></i></span>
                  </div>

                  <div class="small-10  columns">
                      <?php echo Form::text('phone', '', array('placeholder' => 'Primary Phone')); ?>
                  </div>

            </div>
        
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
        
            <div class="row collapse">

              <div class="small-2 columns ">

                <span class="prefix"><i class="fi-lock"></i></span>

              </div>
                
              <div class="small-10 columns ">

                    <?php echo Form::password('password_confirmation', array('placeholder' => 'Confirm Password')); ?>

              </div>
                
            </div>

            <section class='row'>

                <div class='small-5 columns' id='sign-up-forgot'>
                    <a href="<?php echo $signinURL; ?>">Sign In</a>
                </div>

                <div class='small-7 columns'>
                    <?php echo Form::submit('Request', array('class' => 'button right tiny', 'id' => 'sign-up-button')) ?>
                </div>

            </section>
        
        {{ Form::close() }}

      </div>
    
</div>

@stop