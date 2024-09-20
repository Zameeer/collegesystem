<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
     
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style1.css">
  <link rel="stylesheet" href="style2.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   </head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="; width:100%; z-index: 2;">
  <a class="navbar-brand" href="#">Laboratory Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="index.php">Log Out</a>
      </li>

      
  </div>
</nav>


<!--SIDEBAR-->
<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:16%; padding-top: 45px">
  <a href="studentrecord.php" class="w3-bar-item w3-button">Student Records</a> 
  <a href="studentregistration.php" class="w3-bar-item w3-button">Register Student</a> 
  <a href="labs.php" class="w3-bar-item w3-button">Labs</a> 
  
  <a href="managelab.php" class="w3-bar-item w3-button">Manage Labs</a> 
  </div> 
 
</div>

<div style="margin-left:30%">

<!--Content-->
<p></p>

<div class="random" style="display :flex">
<div class="wrapper">
      <div class="title-text">
        
        <div class="title signup">Add </div>
      </div>
      <div class="form-container">
        
        <div class="form-inner">
         
          <form action="" class="signup" method="post">
            
          <div class="field">
              <input type="text" placeholder="Lab ID" name="lab_id" >
            </div>
            
            <div class="field">
            <input type="number" name="mouse" placeholder="Mouse">
            </div>
            <div class="field">
            <input type="number" name="monitor" placeholder="Monitor">
            </div>
            <div class="field">
            <input type="number" name="cpu" placeholder="CPU">
            </div>
            <div class="field">
            <input type="number" name="keyboard" placeholder="Keyboard">
            </div>
            <div class="field">
            <input type="number" name="printer" placeholder="Printer">
            </div>
  
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="submit" value="SUBMIT">

    <?php
    
    
    //Database Connection here
    $con =  new mysqli("localhost", "root", "", "database" );
    if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);

    } 
    else{
      if(array_key_exists('submit', $_POST))
      {
        $lab_id = $_POST['lab_id'];
        $mouse = $_POST['mouse'];
        $monitor = $_POST['monitor'];
        $cpu = $_POST['cpu'];
        $keyboard = $_POST['keyboard'];
        $printer = $_POST['printer'];
        
        $sql = "INSERT INTO lab (lab_id, mouse, monitor, cpu, keyboard, printer) VALUES ( '$lab_id', '$mouse', '$monitor', '$cpu', '$keyboard', '$printer')";
        if ($con->query($sql) === TRUE) {
            echo '<script>alert("Added Successfully")</script>';
            
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            
          }              
          $con->close();       
      }

    }
    ?>


            </div>
          </form>
        </div>
      </div>  
    </div>
    

    <div class="wrapper">
      <div class="title-text">
        
        <div class="title signup">Edit </div>
      </div>
      <div class="form-container">
        
        <div class="form-inner">
         
          <form action="" class="signup" method="post">
          <div class="field">
              <input type="text" placeholder="Lab ID" name="lab_id" >
            </div>
            
            <div class="field">
            <input type="text" name="itemtype" placeholder="Item type">
            </div>
            <div class="field">
            <input type="number" name="qty" placeholder="Quantity">
            </div>
            
  
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="update" value="UPDATE">
    
    
    <?php
    
    
    //Database Connection here
    $con =  new mysqli("localhost", "root", "", "database" );
    if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);

    } 
    else{
      if(array_key_exists('update', $_POST))
      {
        
        $lab_id = $_POST['lab_id'];
        $itemtype = $_POST['itemtype'];
       
        $qty = $_POST['qty'];
        if($itemtype == "mouse")
        {
          $sql = "UPDATE lab SET mouse ='" . $_POST['qty'] . "' WHERE lab_id='" . $_POST['lab_id'] . "'";

        }
        else if($itemtype =="monitor")
        {
          $sql = "UPDATE lab SET monitor ='" . $_POST['qty'] . "' WHERE lab_id='" . $_POST['lab_id'] . "'";
        }
        else if($itemtype =="cpu")
        {
          $sql = "UPDATE lab SET cpu ='" . $_POST['qty'] . "' WHERE lab_id='" . $_POST['lab_id'] . "'";
        }
        else if($itemtype =="keyboard")
        {
          $sql = "UPDATE lab SET keyboard ='" . $_POST['qty'] . "' WHERE lab_id='" . $_POST['lab_id'] . "'";
        }
        else if($itemtype =="printer")
        {
          $sql = "UPDATE lab SET printer ='" . $_POST['qty'] . "' WHERE lab_id='" . $_POST['lab_id'] . "'";
        }
        
       // $sql = "UPDATE lab SET mouse = '$qty' WHERE lab_id = '$lab_id' )";
        
        if ($con->query($sql) === TRUE) {
            echo '<script>alert("Updated Successfully")</script>';
            
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            
          }              
          $con->close();       
      }

    }
    ?>
            
            
            </div>
          </form>
        </div>
      </div>  
    </div>
    

</div>

    <script type="text/javascript" src="C:xampp\htdocs\lm\assets/custom/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="C:xampp\htdocs\lm\assets/custom/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="C:xampp\htdocs\lm\assets/toastr/js/toastr.min.js"></script>
	<script type="text/javascript" src="C:xampp\htdocs\lm\assets/mycustom/js/login.js"></script>
    <script type="text/javascript" src="C:xampp\htdocs\lm\assets/mycustom/js/login.js"></script>
    











<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>