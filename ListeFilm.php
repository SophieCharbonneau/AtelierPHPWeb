<!DOCTYPE html>
<?php
$films = [
    "mon ange",
    "La vie rêvée des anges",
    "Terminator"
];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Liste de Films</h1> 

        <table>
            <caption>Film</caption>
            <thead>
            <th>TITRE</th> <th>ACTION</th>
        </thead>
        <tbody>
            <?php
            foreach ($films as $film):
                ?>


                <tr>
                    <td><?php echo $film ?></td>
                    <td><a href="SuppFilm.php" > Supprimer</a><a href="MajFilm.php" > Modifier</a></td>
                </tr>
    <?php
            endforeach;
?>

        </tbody>
    </table>
</body>
</html>
