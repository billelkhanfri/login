<?php
session_start();
session_destroy();
header('Location: index.php');
exit; // Assurez-vous de terminer le script après la redirection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirection</title>
</head>
<body>
   <!-- Cette partie du code ne sera pas exécutée car le script est redirigé avant -->
</body>
</html>
