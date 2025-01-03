<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
  </head>
  
  <body>
<form action="art.of.olaitan@gmail.com" method="post"> 

<ul>

<li>
<label for="nom"></label>
<input type="text" id="nom" name="user_family_name" />
</li>
<li>
<label for="prenom"></label>
<input type="text" id="prenom" name="user_first_name" />
</li>
<li>
<label for="email"></label>
<input type="email" id="email" name="user_email" />
</li>
<li>
<label for="objet"></label>
<input type="text" id="objet" name="user_objet" />
</li>
<li>
<label for="message"></label>
<textarea id="message" name="user_message"> </textarea>
</li>

</ul>
<div>
<button type="submit">
Envoyer
</button>
</div>
</form>
<?php
    if (isset($_POST["user_message"])) {
        $retour = mail("art.of.olaitan@gmail.com", $_POST["user_objet"], $_POST["user_message"] ,"From:webmaster@monsite.fr");
        if($retour){
		echo "<p>Votre message a bien été envoyé.</p>";}
    }
    ?>

  </body>
</html>