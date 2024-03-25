<?php
// validation des input 

$postData = $_POST;

if (isset($postData['email']) && isset($postData['password'])){


if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {

    $errorMsg = "il faut entrer un email valide pour somettre le formulaire";
}



else {

    foreach ($contacts as $contact){
if (
    $contact['email'] === $postData['email'] && $contact['password'] === $postData['password']
){

    //enregistrement de l'utilistaeur en session
	$_SESSION['LOGGED_USER'] = $contact['nom'];
}

    }
}

if (!isset($logContact)){
    $errMSG = " mot de passe ou email incorrect";



}

}
?>




<!-- affichages des erreur  -->

<?php if (!isset($_SESSION['LOGGED_USER'])) :?>

<form class = 'formed' action='index.php' method="POST">


<!-- si i y a un message d'erreur -->
<?php  if (isset($errMSG)): ?>
  
       <div class="alert alert-danger" role="alert">
                 
            	<?php echo  " Erreur : " . " ". $errMSG; ?>

        	</div>

     	<?php endif; ?>
    	<div class="mb-3">
        	<label for="email" class="form-label">Email</label>
        	<input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
    	</div>
    	<div class="mb-3">
        	<label for="password" class="form-label">Mot de passe</label>
        	<input type="password" class="form-control" id="password" name="password">
    	</div>
    	<button type="submit" class="btn btn-primary">Envoyer</button>
                
</form>

<!-- si tous va bien  -->
<?php else : ?>




<div class="logout"> 
<h1> Bienvenue : <?php echo $_SESSION['LOGGED_USER'] ?></h1>
<center> 
<a href = "session.php">
<button type="submit" class="btn btn-primary">Déconnxion</button>
</a>
</center>
</div>
  



<?php endif; ?>



















