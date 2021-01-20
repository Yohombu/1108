<?php
    require_once('./db/dbConnection.php');
    
    if(isset($_POST['registerbtn'])){
        $email=validate($_POST['email']);
        $fName=validate($_POST['firstname']);
        $lName=validate($_POST['lastname']);
        $username=validate($_POST['username']);
        $gender=validate($_POST['gender']);
        $dob=validate($_POST['dob']);
        $contactno=validate($_POST['contactno']);
        $psw=validate($_POST['psw']);
        $pswRepeat=validate($_POST['psw-repeat']);
    }
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    //send to database
    $sql="INSERT INTO user (email,fName,lName,username,gender,dob,contactno,password) VALUES ('$email','$fName','$lName','$username','$gender','$dob','$contactno','$psw')";

    if (mysqli_query($db,$sql) === TRUE){
        header("Location: ../login/login.html"); 
        
        
        exit();
    }else { 
			echo "Error: " . $sql . "<br>" . $db->error; 
		} 
        $db->close(); 
        exit();
	 

?>