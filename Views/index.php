<!DOCTYPE html>
<html>
<head>
	<title>Nature</title>
	<link rel="stylesheet" href="http://localhost/ProtectNature/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/ProtectNature/public/css/main.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/style.sass">
        <?php foreach ($background as $key => $value) :?>

    <style>
      .mainImage{
  background-image: url("http://localhost/ProtectNature/public/images/<?php  echo $value['image'];?>") ; 
  height: 550px;
  background-position: center center;
    background-size: cover;
    width: 100%:;
    overflow: hidden;
    /*background-attachment: fixed;*/
}
    </style>
  <?php endforeach ;?>
</head>
<body>
<?php session_start();?>
<?php require "header.php" ;?>
<?php require "Celebs.php" ;?>
<?php require "home.php" ;?>
<div id="ry">
<?php require "Login.php" ;?>
<?php require "News.php";?>
<?php require "footer.php" ;?>
</div>

<script src="http://localhost/ProtectNature/public/js/vue.js"></script>
<script src="http://localhost/ProtectNature/public/js/main.js"></script>
<script src="http://localhost/ProtectNature/public/js/jquery-3.1.1.js"></script>

<script src="http://localhost/ProtectNature/public/js/bootstrap.js"></script>



</body>
</html>