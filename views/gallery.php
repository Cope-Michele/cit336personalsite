<?php
$query = "SELECT title, genre, path FROM artwork WHERE userId = 1";
$result = $db->query($query);
$obj1 = $result->fetchObject(); 
$obj2 = $result->fetchObject();
$obj3 = $result->fetchObject();
$obj4 = $result->fetchObject();
$obj5 = $result->fetchObject();
$obj6 = $result->fetchObject();
$obj7 = $result->fetchObject();
$obj8 = $result->fetchObject();
$obj9 = $result->fetchObject();
$obj10 = $result->fetchObject();
$obj11 = $result->fetchObject();
$obj12 = $result->fetchObject();
?>

<h3>take a look around!</h3>
   
 <div id="container">
        <p class="content"> 
        Some is old, some is new.  
	You can get a glimpse of my taste by browsing below. 
	I'll be updating this page regularly with my latest projects,
	so check back often!</p>

        <table>
        <thead>
            <tr>
                <th colspan="3"><?php echo $obj2->genre;?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="/images/picture1.jpg" title="two-brothers"><img id="images" src="<?php echo $obj1->path;?>" alt="two-brothers"></a></td>
                <td><a href="/images/picture5.jpg" title="michele"><img id="images" src="<?php echo $obj2->path;?>" alt="michele"></a></td>
                <td><a href="/images/picture3.jpg" title="boardwalk"><img id="images" src="<?php echo $obj3->path;?>" alt="boardwalk"></a></td>
                <td><a href="/images/picture7.jpg" title="dentist"><img id="images" src="<?php echo $obj4->path;?>" alt="dentist"></a></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th colspan="3"><?php echo $obj5->genre;?></th>
            </tr>
        </thead>
        <tbody> 
            <tr>
                <td><a href="/images/picture4.jpg" title="frogs"><img id="images" src="<?php echo $obj5->path;?>" alt="frogs"></a></td>
                <td><a href="/images/picture6.jpg" title="closet"><img id="images" src="<?php echo $obj6->path;?>" alt="closet"></a></td>
                <td><a href="/images/picture2.jpg" title="boat"><img id="images" src="<?php echo $obj7->path;?>" alt="boat"></a></td>
                <td><a href="/images/picture8.jpg" title="pieces-of-me"><img id="images" src="<?php echo $obj8->path;?>" alt="pieces-of-me"></a></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th colspan="3"><?php echo $obj10->genre;?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="/images/picture9.jpg" title="moonlit-cliff"><img id="images" src="<?php echo $obj9->path;?>" alt="moonlit-cliff"></a></td>
                <td><a href="/images/picture12.jpg" title="bridge-in-alps"><img id="images" src="<?php echo $obj10->path;?>" alt="bridge-in-alps"></a></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th colspan="3"><?php echo $obj11->genre;?></th>
            </tr>
        </thead>
        <tbody>
             <tr>
                <td><a href="/images/picture10.jpg" title="dinofloor-logo"><img id="images" src="<?php echo $obj11->path;?>" alt="dinofloor-logo"></a></td>
                <td><a href="/images/picture11.jpg" title="dinofloor-title"><img id="images" src="<?php echo $obj12->path;?>" alt="dinofloor-title"></a></td>
            </tr>
        </tbody>
    </table>
