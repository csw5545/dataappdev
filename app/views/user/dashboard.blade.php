@extends('layout.master')

@section('page-title')
    Dashboard
@stop

@section('navigation-links')

<li> <a href='/logout'>Log Out</a> </li>

@stop

@section('main-content')

<h1>Welcome "{{ Auth::user()->first_name}}" to your protected page!</h1>

@stop