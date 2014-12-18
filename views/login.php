<?php
?>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="/js/login.js" ></script>

<?php
//	if ($message) {
//		echo $message;
//	} 
?>

<div class="content" id="register">
    <form action="/?action=submitregister" method="POST" id="registerform">
        <input type="hidden" name="actiontype" id="actiontype" value="" />
            <fieldset>
		<legend>Register a new account</legend>
                    First Name: <input type="text" name="firstname" id="firstname"/> <br>
                    Last Name: <input type="text" name="lastname" id="lastname"/> <br>
                    Email Address: <input type="email" name="registeremail" id="registeremail"/> <br>
                    Password: <input type="password" name="registerpassword" id="registerpassword"/> <br>
                    Verify Password: <input type="password" name="verifypassword" id="verifypassword"/> <br>
		<button name="register" id="buttonRegister">Register</button>
            </fieldset>
    </form><br>
		
    <form action="/?action=submitlogin" method="POST" id="loginform">
	<fieldset>
            <legend>Login with existing account</legend>
		Email Address: <input type="text" name="loginemail" id="loginemail"/> <br>
		Password: <input type="password" name="loginpassword" id="loginpassword"/> <br>
		<button name="login" id="buttonLogin">Login</button>
	</fieldset>
    </form>
</div>