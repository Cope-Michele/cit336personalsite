<?php
/// Deletes an item from the database.
/// $itemId - The Id of the item to delete.
function DeleteArtwork($artworkId)
{
	if ($artworkId)
	{
		$query = "DELETE FROM items WHERE ID=:id";
		$result = DbExecute($query, array(':id' => $artworkId));
	}
}
/// Retrieves and item from the database.
/// $id - the ID of the item to retrieve.
function GetArtworkById($id)
{
	$query = "SELECT * FROM items WHERE ID=:id";
	$result = DbSelect($query, array(':id' => $id));
	
	if (array_key_exists(0, $result))
	{
		return $result[0];
	}
	
	return false;
}
function GetArtwork()
{
	$query = "SELECT * FROM artwork";
	return DbSelect($query);
            if ($result)
	{
		return $result;
	}
	
	return false;
}
/// Retreives artwork by genre
function GetPeopleGenre()
{
	$query = "SELECT * FROM artwork WHERE genre = 'People' ORDER BY ASC";
	return DbSelect($query);
            if ($result)
	{
		return $result;
	}
	
	return false;
}

function GetPlacesGenre()
{
	$query = "SELECT * FROM artwork WHERE genre = 'Places' ORDER BY ASC";
	return DbSelect($query);
            if ($result)
	{
		return $result;
	}
	
	return false;
}

function GetThingsGenre()
{
	$query = "SELECT * FROM artwork WHERE genre = 'Things' ORDER BY ASC";
	return DbSelect($query);
            if ($result)
	{
		return $result;
	}
	
	return false;
}

function GetLogoGenre()
{
	$query = "SELECT * FROM artwork WHERE genre = 'Logo Design' ORDER BY ASC";
	return DbSelect($query);
            if ($result)
	{
		return $result;
	}
	
	return false;
}

// Save a new Item
// $name - the name of the item.
// $imageUrl - a URL to the item image.
function NewArtwork($title, $genre, $medium, $path, $name)
{
	$query = "INSERT INTO items(title, genre, medium, path, createdBy) VALUES(:name, :genre, :medium, :path, :createdBy)";
	$id = DbInsert($query, array(':title' => $title,':genre' => $genre,':medium' => $medium, ':path' => $path, ':createdBy' => $name,));
	return $id;
}
?>
