<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
    <title>Bac à sable de code SQL // JPO MMI 2019</title>
</head>
<body>
<header>
    <br>
    <h1 class="title is-1 is-uppercase has-text-centered">Bac à sable de code SQL</h1>
    <h2 class="subtitle is-3 has-text-centered">JPO MMI 2019</h2>
    <br><br>
</header>
<div class="container">
    <div class="columns">
        <div class="column box">
            <div class="field">
            <div class="control">
            <form method="post" action="/">
                <textarea name="requeteSaisie" class="textarea is-primary" placeholder="Écrivez votre code SQL ici..."><?php echo $_POST["requeteSaisie"];?></textarea>
                <input class="button is-fullwidth is-primary" type="submit" name="submit" value="Exécuter mon code">  
            </form>
            </div>
        </div>
        </div>
        <div class="column is-primary box">
        <?php
        include('api/connexionbdd.php');
        include('api/saisierequetesql.php');
        include('api/resultatsql.php');
        ?>
        </div>
    </div>
</div><br><br>
<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Bac à sable SQL</strong>. Un prototype fonctionnel de  <a href="https://twitter.com/DemangeJeremy">Jérémy DEMANGE</a>.
    </p>
  </div>
</footer>
</body>
</html>

