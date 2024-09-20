<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
     
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="style2.css">
   

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
      <a class="nav-link" href="index.php">Log Out</a>
      </li>

      
  </div>
</nav>


<!--SIDEBAR-->
<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:16%; padding-top: 100px">
  <a href="studentrecord.php" class="w3-bar-item w3-button">Student Records</a> 
  <a href="studentregistration.php" class="w3-bar-item w3-button">Register Student</a> 
  <a href="labs.php" class="w3-bar-item w3-button">Labs</a> 

  <a href="managelab.php" class="w3-bar-item w3-button">Manage Labs</a> 
  </div> 
  <a href="#" class="w3-bar-item w3-button">Link 3</a> 
</div>

<div style="margin-left:30%">

<!--Content-->
<p></p>

<div class="content">
    <h2>Student Registration</h2>



    <div class="wrapper">
      <div class="title-text">
        
        <div class="title signup">Registration</div>
      </div>
      <div class="form-container">
        
        <div class="form-inner">
         
          <form action="reg.php" class="signup" method="post">
          <div class="field">
              <input type="text" placeholder="ID" name="s_id" required>
            </div>
            <div class="field">
              <input type="text" placeholder="NAME" name="s_name" required>
            </div>
            <div class="field">
              <input type="email" placeholder="Email Address" name="s_email" required>
            </div>
            <div class="field">
              <input type="text" placeholder="PHONE" name="s_phone" required>
            </div>
            
            
            
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="submit" value="SUBMIT">
            </div>
          </form>
        </div>
      </div>  
    </div>
    

    <script type="text/javascript" src="C:xampp\htdocs\lm\assets/custom/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="C:xampp\htdocs\lm\assets/custom/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="C:xampp\htdocs\lm\assets/toastr/js/toastr.min.js"></script>
	<script type="text/javascript" src="C:xampp\htdocs\lm\assets/mycustom/js/login.js"></script>
    <script type="text/javascript" src="C:xampp\htdocs\lm\assets/mycustom/js/login.js"></script>
    

</div>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>