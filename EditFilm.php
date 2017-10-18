<?php

            $tabfilm["titre"] = "Intouchable";
            $tabfilm["synop"] = "Deux amis...";
            $tabfilm["anneeprod"] = "2011";
            $tabfilm["genre"] = "Comédie";
  ?>


 <html>
    <body>
        <h1> Nouveau Film</h1>
        <a href="login.php" > Login</a>
        <br>
        <a href="NewFilm.php" > Nouveau film</a>
        <br><br>
        
        
         
        <label>Titre du film</label> 
        <input name="titre" type="text" value="<?php echo $tabfilm["titre"] ?>" /></input>
        <br>
        <label>Synopsis</label> 
        <textarea name="synop"><?php echo $tabfilm["synop"] ?></textarea>
        
        <br>
        <label>Année de production</label> 
        <input name="anneeprod" type="number" value="<?php echo $tabfilm["anneeprod"] ?>"</input>
        <br>
        <label>Genre du film</label> 
        <select name="GenreFilm">
            <option>Comédie</option>
            <option>SF</option>
            <option>Horreur</option>            
        </select>
        <br>
        <input type="submit" values="Envoyer"</input>
        
    </body>

</html>

