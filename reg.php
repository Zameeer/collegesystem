<?php
    
    
    //Database Connection here
    $con =  new mysqli("localhost", "root", "", "database" );
    if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);

    } 
    else{
 
            $s_id = $_POST['s_id'];
            $s_name = $_POST['s_name'];
            $s_email = $_POST['s_email'];
            $s_phone = $_POST['s_phone'];
            
            $sql = "INSERT INTO student (s_id, s_name, s_email, s_phone) VALUES ( '$s_id', '$s_name', '$s_email', '$s_phone')";
            if ($con->query($sql) === TRUE) {
                echo '<script>alert("Registered Successfully")</script>';
                
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                
              }              
              $con->close();       
    
    
    
    }   
?>