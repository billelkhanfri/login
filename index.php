<?php session_start(); ?>

<?php include_once (__DIR__ ."/variables.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<div class=" container wrapper"> 

    	<?php require_once(__DIR__ . '/login.php'); ?>
  <br> 
        <?php if (isset($logContact)) :?>
      
<div>
    
</div>


            <?php endif ;?>

    </div>
</body>
</html>