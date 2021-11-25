<!DOCTYPE html>
<html>
<head>
  <title>Email list</title>
</head>
<body>
<form  method="post" target="_self" onclick=select();>
    <input type="submit" name="buttona" value="Show All"> 
</form>
<form  method="post" target="_self" onclick=select();>
    <input type="submit" name="buttong" value="Gmail"> 
</form>
<form  method="post" target="_self" onclick=select();>
    <input type="submit" name="buttony" value="Yahoo"> 
</form>
<form  method="post" target="_self" onclick=select();>
    <input type="submit" name="buttono" value="Outlook"> 
</form>
<h2>Email list</h2>

<table border="2">
  <tr>
    <td>Email</td>
    <td>Date</td>
    <td>Delete</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here
$records = mysqli_query($db,"select * from mail"); // fetch data from database
if(isset($_POST['buttona'])){$records = mysqli_query($db,"select * from mail");}
if(isset($_POST['buttong'])){$records = mysqli_query($db,"select * from mail WHERE email LIKE '%gmail.com'");}
if(isset($_POST['buttony'])){$records = mysqli_query($db,"select * from mail WHERE email LIKE '%yahoo.com'");}
if(isset($_POST['buttono'])){$records = mysqli_query($db,"select * from mail WHERE email LIKE '%outlook.com'");}
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['date']; ?></td>    
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>