<?php

?>

<ul>
	<li><a style="color: white" href="/?action=myinfo">Update my info</a></li>
</ul>


<?php if(LoggedInUserIsAdmin()) : ?>

	Admin Items:<br />
	<ul>
		<li><a style="color: white" href="/?action=editusers">Edit Users</a></li>
                <li><a style="color: white" href="/?action=newartwork">Upload a new piece</a></li>
	</ul>

<?php endif; ?>