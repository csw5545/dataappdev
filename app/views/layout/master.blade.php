<!DOCTYPE html>

<html lang="en">
    
    <head>
        @include('includes.head')
    </head>

    <body>

        @include('includes.header')
        
        <main class='row'>
            @yield('main-content') 
        </main>

        
        @include('includes.footer')