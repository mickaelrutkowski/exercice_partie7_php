<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Php</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <?php
    if (empty($_POST['lastname'])) {
        ?>
        <form action="index.php" method="POST">
            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" value="" placeholder="Entrez votre nom">
            <label for="firstname">Prénom :</label>
            <input type="text" name="firstname" value="" placeholder="Entrez votre prénom">
            <label for="gender"></label>
            <select name="gender">
                <option value="">Genre</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Non-Binaire">Non-Binaire</option>
            </select>
            <label for="file"></label>
            <input type="file" name="file" placeholder="Envoi de fichier depuis votre ordinateur">
            <button type="submit" class="btn btn-dark">Envoyez vos données</button>
        </form>
    <?php
      } else {
        ?>
        <p><?= 'Vous vous appellez ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' et vous êtes un(e) ' . $_POST['gender'];?></p>
        <?php
        $ext = new SplFileInfo($_POST['file']); //Sert à récupérer les informations d'un fichier envoyé
        $extension = $ext -> getExtension(); //Permet de récupérer uniquement l'extension du fichier envoyé
        $fileName = $ext -> getBasename(".$extension"); //Permet de récupérer le nom du fichier, en précisant .$extension je dis que je souhaite avoir uniquement le nom du fichier sans son extension
        ?>
        <p><?= 'L\'extension de votre fichier est : ' . $extension?></p>
        <p><?= 'Le nom du fichier envoyé est : ' . $fileName?></p>    
        <?php      
            if ($extension === 'pdf'){?>
        <p><?= "Le fichier $extension existe.";?></p>
         <?php        
      } else { 
          ?>
        <p><?= "Le fichier $extension n'existe pas.";?></p>        
         <?php }
        }       
      ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
