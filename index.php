<?php

/*
Michele Cope
CIT336
 */

session_start();
require 'models/comment.php';
require 'models/db.php';
require 'models/art_piece.php';
require 'models/navigation.php';
require 'models/users.php';
require 'models/database_access.php';
require 'models/roles.php';
//echo 'Im working';
include 'views/header.php';

$action = strtolower(filter_input(INPUT_GET,'action', FILTER_SANITIZE_STRING));

switch ($action){
    case 'aboutme':
        include 'views/aboutme.php';
        break;
    
    case 'contact':
        include 'views/contact.php';
        break;
    
    case 'gallery':
        include 'views/gallery.php';
        break;
    
    case 'login':
        include 'views/login.php';
        break;
    
    case 'homepage':
        include 'views/homepage.php';
        break;
    
    case 'siteplan':
        include 'views/siteplan.php';
        break;
    
    case 'teachingpresentation':
        include 'views/teachingpresentation.php';
        break;
    
    case 'submitlogin':
        $email = filter_input(INPUT_POST, 'loginemail', FILTER_SANITIZE_EMAIL);
	    $password = filter_input(INPUT_POST, 'loginpassword', FILTER_SANITIZE_STRING);
        if (LoginUser($email, $password)) {
            header('Location:/?action=menu');
            exit();
        }
        
        include 'views/login.php';
        break;
        
    case 'changerole':
        $userid = (int) filter_input(INPUT_GET, 'userid', FILTER_SANITIZE_NUMBER_INT);
        $role = filter_input(INPUT_GET, 'role', FILTER_SANITIZE_STRING);
        
        if (LoggedInUserIsAdmin() && $userid && $role)
        {
            UpdateUserRole($userid, $role);
        }
        
        header('Location: /?action=editusers');
        exit();
        
    case 'deleteartwork':
        $id = (int) filter_input(INPUT_GET, 'itemId', FILTER_SANITIZE_NUMBER_INT);
        DeleteItem($id);
        header('Location: /?action=gallery');
        exit();
    
    case 'deleteuser':
        $id = (int) filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        
        if (LoggedInUserIsAdmin() && $id)
        {
            DeleteUser($id);
        }
        
        header('Location: /?action=editusers');
        exit();
        
    case 'editusers':
        $page = (LoggedInUserIsAdmin()) ? 'views/editusers.php' : 'views/login.php';
        $users = GetAllUsers();
        include $page;
        break;

        case 'menu':
        $page = (CheckSession()) ? 'views/menu.php' : 'views/login.php';
        include $page;
        break;
        
    case 'myinfo':
        $page = 'views/myinfo.php';
        
        if ($userId = GetLoggedInUserId()) 
        {
            $page = 'views/myinfo.php';
            $user = GetUser($userId);
        }
        
        include $page;
        break;
    
    case 'newartwork':
        $page = (CheckSession()) ? 'views/newartwork.php' : 'views/login.php';
        include $page;
        break;
        
    case 'newartworksubmit':
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	    $path = filter_input(INPUT_POST, 'path', FILTER_SANITIZE_URL);
        
        if ($name && $path && $artworkId = SaveNewArtwork($name, $path))
        {
            $artwork = GetArtworkById($Id);
            $comments = GetCommentsWithUsersForArtwork($artworkId);
            include 'views/itemdetails.php';
        }
        else
        {
            include 'views/newartwork.php';
        }
        
        break;
        
    case 'postcomment':
        $itemId = (int) filter_input(INPUT_POST, 'itemId', FILTER_SANITIZE_NUMBER_INT);
        if ($userId = GetLoggedInUserId())
        {
            $text = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
        
            if ($itemId && $text)
            {
                SaveComment($itemId, $userId, $text);
            }
        }
        
        $item = GetItemById($itemId);
        $comments = GetCommentsWithUsersForItem($itemId);
        include 'views/itemdetails.php';
        break;
    
    case 'submitregister':
        $regFirst = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $regLast = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $emailregister = filter_input(INPUT_POST, 'registeremail', FILTER_SANITIZE_EMAIL);
        $registerpassword = filter_input(INPUT_POST, 'registerpassword', FILTER_SANITIZE_STRING);
        $verifypassword = filter_input(INPUT_POST, 'verifypassword', FILTER_SANITIZE_STRING);
        $message = '';
        
        if (RegisterUser($regFirst, $regLast, $emailregister, $registerpassword, $verifypassword, $message)) {
            header('Location: /?action=menu');
            exit();
        }
        
        include 'views/login.php';
        break;
    
    case 'viewitem':
        $itemId = (int) filter_input(INPUT_GET, 'itemId', FILTER_SANITIZE_NUMBER_INT);
        $item = GetItemById($itemId);
        $comments = GetCommentsWithUsersForItem($itemId);
        include 'views/itemdetails.php';
        break;
        
    case 'updateinfo':
        $emailregister = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $regFirst = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $regLast = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        
        if ($userId = GetLoggedInUserId()) 
        {
            $page = 'views/myinfo.php';
            
            if ($email && $regFirst && $regLast) 
            {
                UpdateUserInfo($userId, $email, $regFirst, $regLast);
                $user = GetUser($userId);
                $message = 'User Info Updated.';
            }
            else
            {
                $message = 'Please fill in all information to update.';
            }
        }
        else
        {
            $page = 'views/login.php';
        }
        
        include $page;
        break;
    
    case 'updatepassword':
        $oldpassword = $_POST['currentpassword'];
        $newpassword = $_POST['newpassword'];
        $newpassword2 = $_POST['repeatpassword'];
        $message = '';
        
        if ($newpassword == $newpassword2)
        {
            $validMessage = '';
            if (ValidatePassword($newpassword, $validMessage))
            {
                if (ValidateOldPassword($oldpassword))
                {
                    UpdateUserPassword($newpassword);
                    $message = 'Password Updated';
                }
                else
                {
                    $message = 'The old password did not match.';
                }
            }
            else
            {
                $message = $validMessage;
            }
        }
        else
        {
            $message = "The new passwords do not match";
        }
        
        if ($userId = GetLoggedInUserId()) 
        {
            $page = 'views/myinfo.php';
            $user = GetUser($userId);
        }
  
        include 'views/myinfo.php';
        break;
    
    case 'logout':
        session_destroy();
        $_SESSION = array();
        header('Location:/');
        exit();
        break;
    
    default:
        include 'views/homepage.php';
        break;
    
}

include 'views/footer.php';
?>

</body>
</html>
