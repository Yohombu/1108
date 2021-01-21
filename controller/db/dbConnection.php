

<?php
    $db=mysqli_connect('localhost','root','','1108');

    if ($db->connect_error) { 
		die("Connection failed: " . $db->connect_error); 
        }
?>
