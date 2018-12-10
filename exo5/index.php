<!DOCTYPE html PUBLIC>
<html lang="fr" >
    <head>
        <title>Formulaires</title>
        <meta charset=utf-8 />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2"></div>
                <form action="index.php" method="GET">
                    <p>
                        <input type="text" name="name" />
                        <input type="text" name="firstName" />
                        <input type="submit" value="Valider" />
                    </p>
                    <select name="choix">
                        <option value="">Genre</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                        <option value="non binaire">non binaire</option>
                    </select>
                </form>
            </div>
            <p>Bonjour !</p>
            <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_GET['name'] . ' ' . $_GET['firstName'] . ' ' . 'et vous etes un(e)' . ' ' . $_GET['choix']; ?> </p>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
