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
</div>
<!--    <div>
        <?php echo $obj1->title?> <br>
        <?php echo $obj1->genre;?> <br>
        <a href="/images/picture1.jpg"><img id="images" src="<?php echo $obj1->path;?>"></a><br><br>
        <?php echo $obj2->title;?> <br>
        <?php echo $obj2->genre;?> <br>
        <a href="/images/picture5.jpg"><img id="images" src="<?php echo $obj2->path;?>"></a><br><br>
        <?php echo $obj3->title;?> <br>
        <?php echo $obj3->genre;?> <br>
        <a href="/images/picture3.jpg"><img id="images" src="<?php echo $obj3->path;?>"></a><br><br>
        <?php echo $obj4->title;?> <br>
        <?php echo $obj4->genre;?> <br>
        <a href="/images/picture7.jpg"><img id="images" src="<?php echo $obj4->path;?>"></a><br><br>
        <?php echo $obj5->title;?> <br>
        <?php echo $obj5->genre;?> <br>
        <a href="/images/picture4.jpg"><img id="images" src="<?php echo $obj5->path;?>"></a><br><br>
        <?php echo $obj6->title;?> <br>
        <?php echo $obj6->genre;?> <br>
        <a href="/images/picture6.jpg"><img id="images" src="<?php echo $obj6->path;?>"></a><br><br>
        <?php echo $obj7->title;?> <br>
        <?php echo $obj7->genre;?> <br>
        <a href="/images/picture2.jpg"><img id="images" src="<?php echo $obj7->path;?>"></a><br><br>
        <?php echo $obj8->title;?> <br>
        <?php echo $obj8->genre;?> <br>
        <a href="/images/picture8.jpg"><img id="images" src="<?php echo $obj8->path;?>"></a><br><br>
        <?php echo $obj9->title;?> <br>
        <?php echo $obj9->genre;?> <br>
        <a href="/images/picture9.jpg"><img id="images" src="<?php echo $obj9->path;?>"></a><br><br>
        <?php echo $obj10->title;?> <br>
        <?php echo $obj10->genre;?> <br>
        <a href="/images/picture12.jpg"><img id="images" src="<?php echo $obj10->path;?>"></a><br><br>
        <?php echo $obj11->title;?> <br>
        <?php echo $obj11->genre;?> <br>
        <a href="/images/picture10.jpg"><img id="images" src="<?php echo $obj11->path;?>"></a><br><br>
        <?php echo $obj12->title;?> <br>
        <?php echo $obj12->genre;?> <br>
        <a href="/images/picture11.jpg"><img id="images" src="<?php echo $obj12->path;?>"></a><br><br>
</div>   -->

        <table>
        <thead>
            <tr>
                <th colspan="3"><?php echo $obj2->genre;?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="/images/picture1.jpg"><img id="images" src="<?php echo $obj1->path;?>"></a></td>
                <td><a href="/images/picture5.jpg"><img id="images" src="<?php echo $obj2->path;?>"></a></td>
                <td><a href="/images/picture3.jpg"><img id="images" src="<?php echo $obj3->path;?>"></a></td>
                <td><a href="/images/picture7.jpg"><img id="images" src="<?php echo $obj4->path;?>"></a></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th colspan="3"><?php echo $obj5->genre;?></th>
            </tr>
        </thead>
        <tbody> 
            <tr>
                <td><a href="/images/picture4.jpg"><img id="images" src="<?php echo $obj5->path;?>"></a></td>
                <td><a href="/images/picture6.jpg"><img id="images" src="<?php echo $obj6->path;?>"></a></td>
                <td><a href="/images/picture2.jpg"><img id="images" src="<?php echo $obj7->path;?>"></a></td>
                <td><a href="/images/picture8.jpg"><img id="images" src="<?php echo $obj8->path;?>"></a></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th colspan="3"><?php echo $obj10->genre;?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="/images/picture9.jpg"><img id="images" src="<?php echo $obj9->path;?>"></a></td>
                <td><a href="/images/picture12.jpg"><img id="images" src="<?php echo $obj10->path;?>"></a></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th colspan="3"><?php echo $obj11->genre;?></th>
            </tr>
        </thead>
        <tbody>
             <tr>
                <td><a href="/images/picture10.jpg"><img id="images" src="<?php echo $obj11->path;?>"></a></td>
                <td><a href="/images/picture11.jpg"><img id="images" src="<?php echo $obj12->path;?>"></a></td>
            </tr>
        </tbody>
    </table>