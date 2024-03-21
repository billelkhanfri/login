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

    $logContact = ['email' => $contact['email']];
}

    }
}

if (!isset($logContact)){
    $errMSG = " mot de passe ou email incorrect";



}

}
?>




<!-- affichages des erreur  -->

<?php if (!isset($logContact)) :?>

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

<?php foreach ($contacts as $contact):?>

<?php if ($contact['email']=== $logContact['email']): ?>



<h1> Bienvenue : <?php echo $contact['nom'] ?></h1>
    <?php endif ;?>

    <?php endforeach ; ?>


<?php endif; ?>



















