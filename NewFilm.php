
<html>
    <body>
        <h1> Nouveau Film</h1>
           <?php include './menu.php';?>
        <br><br>
        <form action="ajoutfilm.php" method="post"
            <label>Titre du film</label> 
            <input name="titre" type="text"</input>
            <br>
            <label>Synopsis</label> 
            <textarea name="synop"></textarea>

            <br>
            <label>Année de production</label> 
            <input name="anneeprod" type="number" </input>
            <br>
            <label>Genre du film</label> 
            <select name="GenreFilm">
                <option>Comédie</option>
                <option>SF</option>
                <option>Horreur</option>            
            </select>
            <br>
            <input type="submit" values="Envoyer" </input>
            
        </form>
    </body>

</html>

