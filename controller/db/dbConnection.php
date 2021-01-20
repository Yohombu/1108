

<?php
    $db=mysqli_connect('localhost','root','mysql','register');

    if ($db->connect_error) { 
		die("Connection failed: " . $db->connect_error); 
        }
?>