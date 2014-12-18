<?php
/// GetCommentsByUser
/// Returns all of the comments written by the given user.
/// $userId - the User Id of the user who wrote the comments.
function GetCommentsByUser($userId) {
	$query = "SELECT * FROM artwork WHERE userId=:id";
	return DbSelect($query, array(':id' => $userId));
}
/// Retrieves the Comment and User information for a given Item.
/// $itemId - the Id of the item to look up.
function GetCommentsWithUsersForArtwork($artworkId) {
	$query = "SELECT * FROM comments AS c
			  LEFT JOIN users AS u on u.Id = c.userId
			  WHERE c.itemId=:id
			  ORDER by updated";
	return DbSelect($query, array(':id' => $artworkId));
}
/// Saves comments onto an item.
/// $itemId - the Item to save comments for
/// $userId - the Id of the User who wrote the comment.
/// $comment - the text of the comment.
function SaveComment($artworkId, $userId, $comment)
{
	$query = "INSERT INTO artwork(userId, Id, comment) VALUES(:userId, :artworkId, :comment)";
	return DbInsert($query, array(':userId' => $userId, ':artworkId' => $artworkId, ':comment' => $comment));
}
?>
