<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
     
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style1.css">
 

  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   </head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position:fixed; width:100%; z-index: 2;">
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
        <a class="nav-link" href="#">Link</a>
      </li>

      
  </div>
</nav>


<!--SIDEBAR-->
<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:16%; padding-top: 100px">
  <a href="#" class="w3-bar-item w3-button">Student Records</a> 
  <a href="#" class="w3-bar-item w3-button">Register Student</a> 
  <a href="#" class="w3-bar-item w3-button">Labs</a> 
  <a href="#" class="w3-bar-item w3-button">Equipments</a> 
  
  </div> 
  <a href="#" class="w3-bar-item w3-button">Link 3</a> 
</div>

<div style="margin-left:30%">

<!--Content-->
<p></p>









<div class="content">
    <h2>Student Records</h2>

    <div class="container">
	
	<div class="table">
		<div class="table-header">

			<div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">ID</a></div>
			<div class="header__item"><a id="name" class="filter__link" href="#">Name</a></div>			

			<div class="header__item">EMAIL</div>
			<div class="header__item">PHONE</div>
		</div>
		<div class="table-content">	
<?php
    //Database Connection here
    $con =  new mysqli("localhost", "root", "", "database" );
    if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);

    } 
    else{
      $sql = "SELECT * FROM student";
      $result = $con->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          
         echo "<div class='table-row'>
         <div class='table-data'>" . $row["s_id"]. "</div>
         <div class='table-data'>" . $row['s_name']. "</div>
         <div class='table-data'>" . $row['s_email']. "</div>
         <div class='table-data'>" . $row['s_phone']. "</div>
         </div>";
        }
      } else {
        echo "0 results";
      }

    }

    ?>
			
				

			
			
         
		</div>	
	</div>
</div>
</div>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>