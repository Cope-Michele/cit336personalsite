<?php
   $nav = GetNavigation();
?>
        
<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Michele Cope">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
        <title>michelevcope.com</title>
        
        <link href='http://fonts.googleapis.com/css?family=Maven+Pro|Comfortaa:300' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="site-stylesheet.css"/>
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js" ></script>
        
        <img src ="/images/bwlogo.png" id="logo"><br>
         <img id="background" src ='SomePlaceByMoab3.jpg'>
        <div id="header">
        
        <nav>
            <ul id="navbar">
                <?php foreach($nav as $action => $text) : ?>
                <li>
                    <a href='/index.php?action=<?php echo $action ?>'><?php echo $text ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
      </div>
    </head>    

    <body>
       

