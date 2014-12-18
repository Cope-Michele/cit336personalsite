<?php

/*
Michele Cope
 */

function GetNavigation()
{
    $nav = array(
        'homepage' => 'Home',
        'gallery' => 'Gallery',
        'aboutme' => 'About',
        'contact' => 'Contact'
    );
    
    if (CheckSession())
    //if (true)
    {
        $nav['menu'] = 'Menu';
        $nav['logout'] = 'Log Out';

    }
    else
    {
        $nav['login'] = 'Log In';
    }
    
    return $nav;
}
?>
