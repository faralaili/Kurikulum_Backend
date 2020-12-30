<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
  require_once('tampilan.php');
  if(isset($_SESSION['status'])){

?>
<?php
}else{
    ?>
    <a href="login.php">login</a>
    <a href="register.php">register</a>

    <?php
   }
?>
<hr>
<?php
$blog = new blog();
$blog->blog_index();
?>
</body>
</html>