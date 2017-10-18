<!DOCTYPE html>
<?php
include './lib/db.php';

$films = dblisterfilm()
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="suppfilm.php" method="post"
        <h1>Liste de Films</h1> 

        <table>
            <caption>Film</caption>
            <thead>
            <th>ID</th> <th>Titre</th><th>Annee</th><th>Synopsis</th><th>ACTION</th>
        </thead>
        <tbody>
            <?php
            foreach ($films as  $film):
                ?>


                <tr>
                    <td><?php echo $film["id"] ?></td>
                    <td><?php echo $film["titre"] ?></td>
                    <td><?php echo $film["annee_prod"] ?></td>
                    <td><?php echo $film["synopsis"] ?></td>
                    <td><a href="SuppFilm.php?id=<?php echo $film["id"] ?>" > Supprimer</a><a href="MajFilm.php" > Modifier</a></td>
                </tr>
    <?php
            endforeach;
?>
                </form>
        </tbody>
    </table>
</body>
</html>
