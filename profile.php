<?php
  session_start();
  require('funs.php');
  $userid=$_SESSION['id'];
  $con=con();

  $query="SELECT * FROM user U WHERE U.uid='$userid'";
  $result=$con->query($query);

  $arr=$result->fetch_array();

  $name=$arr["uname"];
  $email=$arr["email"];

?>

<!DOCTYPE html>
<html>
<head>
  <title>music world</title>
  <meta charset="UTF-8">
  <meta name="author" content="jugta ram">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="shortcut icon" type="image/x-icon" href="onebit_40.ico" /> 
 <style>
  .group{
    font-size:19px;
    color:white;
  }
  </style>
</head>
<body style="background: url(bg3.jpg) repeat;">

 <?php require 'home.php' ?>
 <script>
let ff=`<li id="userpage"><a class="group" href="profilephoto.php" target="_top" ><span class="glyphicon glyphicon-user"></span>hello <?php echo " $name" ?></a>
    </li>

    <li id="logout"><a class="group" href="/sangeet/logout.php" data-toggle="modal" ><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>`

$("#changeable").html(" "+ff);
 </script>

</body>
</html>