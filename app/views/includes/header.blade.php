<header>
            
    <nav class="top-bar" data-topbar> 
        
        <ul class="title-area text-center"> 
            @section('navigation-bar')
            <li class="name"> <h1> <?php echo link_to_action('UserController@getIndex', 'Volunteer Management System', null, null); ?> </h1> </li> 
        </ul> 

        <section class="top-bar-section"> 

            <!-- Right Nav Section --> 
            <ul class="right" id='navigation-menu'> 
                @yield('navigation-links')
            </ul> 

        </section> 

    </nav> 

</header>
