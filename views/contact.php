<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<h3>Can i help you with something?</h3>

<div id="container">

  <div id="form">
    <form action="/?action=contact" method="POST" id="contactform">
        <input type="hidden" name="actiontype" id="actiontype" value=""/>
            <fieldset>
		<legend>Contact Me</legend>
                    First Name: <input type="text" name="firstname" id="firstname"/><br>
                    Last Name: <input type="text" name="lastname" id="lastname"/><br>
                    Email Address: <input type="email" name="registeremail" id="registeremail"/><br>
                    Comment: <textarea name="comment" id="comment" rows="5" cols="40"></textarea><br>
		<button name="submit" id="buttoncontact">Submit</button>
            </fieldset>
    </form><br>
</div>
    </div>