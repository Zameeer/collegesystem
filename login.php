<?php
    
    
    //Database Connection here
    $con =  new mysqli("localhost", "root", "", "database" );
    if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);

    } 
    else{

        if(array_key_exists('Login', $_POST)){
    $email = $_POST['email'];
    $password = $_POST['password'];
        $stmt = $con->prepare("select * from registration where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
         if($stmt_result->num_rows>0) {
                $data = $stmt_result ->fetch_assoc();
                if($data['password'] == $password) {
                    header("Location: home.php");
                    die();
                } else {
                    echo "<h2>Invalid email or password</h2>";
                 }
                
                
        } 
        else {
            echo "<h2>Invalid email or password</h2>";
            }
        
        }
    

        else if(array_key_exists('Signup', $_POST))
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $sql = "INSERT INTO registration (fname, lname, email, password) VALUES ( '$fname', '$lname', '$email', '$password')";
            if ($con->query($sql) === TRUE) {
                header("Location: home.php");
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }              
              $con->close();
        }
           
    
    
    
    }


        
            
            



    
?>