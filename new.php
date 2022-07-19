<?php
$conn = mysqli_connect("localhost","root","","form");
 
if(isset($_POST['submit'])){
   $username = $_POST['uname'];
   $phoneno = $_POST['no'];
   $pass = $_POST['pass'];
   $sql = "INSERT INTO `form fillup`(`username`,`phone no`, `password`) VALUES ('$username','$phoneno','$pass')";
mysqli_query($conn,$sql);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method ="post">
     <input type="text" placeholder= "Userrname" name ="uname">
     <input type="number" placeholder= "Phone no." name = "no">
     <input type="password" placeholder= "******" name = "pass">
    <input type="submit" name = "submit">
</form>
</body>
</html>