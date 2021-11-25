<!DOCTYPE html>
<html>
<head>
  	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
	<meta name="autors" content="Arkadijs Kudrjavcevs"/>
	<title>Sakuma lapa</title>
  <link href="mstyle.css" rel="stylesheet"/>
  <link href="styles.css" rel="stylesheet"/>
  
  
	<script src="task2.js"></script>
  
</head>
<body>
  <nav>
    <div class="logo"> 
        <a href="#"><img src="img/Union.jpg"></a>
    </div>
    <div class="pine"> 
        <a href="#">pineaple.</a>
    </div>
	
<div class="links"> 
  <ul class="nav-links">
   	<li><a href="#">About</a></li>
	<li><a href="#">How it works</a></li>
	<li><a href="#">Contact</a></li>
 </ul>
</div>
</nav>
<body>
    <div class="main">           
        <div class="header">
                 <h1>Subscribe to newsletter</h1>
                 <h2>Subscribe to our newsletters and get 10% discounton on pineapple glasses.</h2>
                      <div class="forma">
                      <form  method="post" target="_self" onclick="">
                         <input onchange="validateForm()" class="text" type="text"  placeholder="Type your email adress here..." id="valid" name="email" >
                         <input class="button" type="submit"  id="butt" name="submit" value="" >
                        <span id="texts"></span>
                      </form>
                      </div>
                      
                     <div class="check"> 
                        <input onchange="validateForm()" id="box" type="checkbox">
                      </div>
                      <div class="terms">
                        <a>I agree to </a>
                        <a style="font-weight: bold; color:black " href="#">terms of service</a>
                     </div>

                     <div class="icon">
                        <div class="social"> 
                            <ul>
                                <li><input class="icons1"></li> 
                                <li><input class="icons2"></li>  
                                <li><input class="icons3"></li> 
                                <li><input class="icons4"></li> 
                            </ul>
                        </div>

                     </div>
                  </div>
    </div>
    
<noscript>
<?php 
$email2 = $_POST["email"];
if (filter_var($email2, FILTER_VALIDATE_EMAIL)) {
}
  else {
   exit();
}
?>
</noscript>
    
    <?php
  
    if(isset($_POST['submit'])) {


      $dbname = "subscribe";

      

      
    $x=$_POST["email"];
     
    $servername = "localhost";
    $username = "root";
    $password = "test12345";
    $dbname = "subscribe";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      
    }
     
    $sql = "INSERT INTO mail (id, email, date)
    VALUES (NULL, '$x', CURRENT_TIMESTAMP)";
    
    if ($conn->query($sql) === TRUE) {
      $conn->close();
      header("Location: task2.php");
    } else {
      
    }
    
    }
    ?>
</body>
</html>