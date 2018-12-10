
<!DOCTYPE html PUBLIC>
<html lang="fr" >
    <head>
        <title>Formulaires</title>
        <meta charset=utf-8 />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
c
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2"></div>
  <?PHP
  $verifInput = '#[A-Z]{1}[a-z]+$#';
  // on teste la déclaration de nos variables
  if (empty($_POST['name']) || empty($_POST['firstName']) || empty($_POST['choix'])){;

          ?>
                <form action="index.php" method="POST">
                    <p>
                        <input type="text" name="name" />
                        <input type="text" name="firstName" />
                        <input type="submit" value="Valider" />
                    </p>
                    <select name="choix">
                        <option value="">genre</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                        <option value="non binaire">non binaire</option>
                    </select>
                </form>
    <?php
  }else{
    echo 'Votre prénom est '.$_POST['name'].' et votre nom '.$_POST['firstName'].' Votre genre '.$_POST['choix'];
  }
  ?>
            </div>
        </div>
    </body>
</html>
