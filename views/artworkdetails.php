<?php
	$path = $artwork['path'];
	$title = $artwork['title'];
	$id = $artwork['ID'];

?>

<script src="/js/artworkdetails.js" ></script>

<div id="content">
	<figure>
		<img src="<?php echo $path;?>" alt="<?php echo $title;?>"/>
		<figcaption>
			<?php echo $name; ?><br />
			<?php if (LoggedInUserIsAdmin()) : ?>
				<button id="removebutton" onclick="DeleteArtwork(<?php echo $id; ?>);">Delete Piece</button>
			<?php endif; ?>
		</figcaption>
	</figure>
	
	<?php foreach ($comments as $comment) : ?>
		<div id="commentdiv">
			<fieldset>
				<legend><?php echo $comment['firstname']; ?> : <?php echo $comment['updated']; ?></legend>
				<?php echo $comment['comment']; ?>	
			</fieldset>
		</div>
	<?php endforeach; ?>
	
	<?php if (CheckSession()) : ?>
		<p>
			Post a new comment:<br />
			<form id="commentform" method="POST" action="/?action=postcomment">
				<input type="hidden" name="itemId" value="<?php echo $id; ?>" />
				<textarea cols="40" rows="5" name="comment" id="commentarea"></textarea><br />
				<input type="submit" name="Submit" value="Submit" />
			</form>
		</p>
	<?php else : ?>
		<p>
			Please log in to post a comment.
		</p>
	<?php endif; ?>
</div>
