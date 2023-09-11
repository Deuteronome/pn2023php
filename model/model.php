<?php
    //Connexion à la base de données

    function connectDB() {
        $bdd = new PDO('mysql:host=localhost:3307;dbname=livres;charset=utf8','root', 'root');
        return $bdd;
    }

    //Gestion des utilisateurs


    //Gestion des livres
    //Récupération de données

    function getAllBooks($bdd) {
        $sqlQuery = "SELECT * FROM livres_vw ORDER BY titre ASC";
        $logStatement = $bdd -> prepare($sqlQuery);
        $logStatement -> execute();
        $req = $logStatement -> fetchAll();
        $logStatement -> closeCursor();//optionnel si pas d'autre requête
        
        return $req;
    }

    function getBooksByGenre ($bdd, $genre) {
        $sqlQuery = "SELECT * FROM livres_vw WHERE genre = :genre ORDER BY titre ASC";
        $logStatement = $bdd -> prepare($sqlQuery);
        $logStatement -> execute([
            "genre" => $genre
        ]);
        $req = $logStatement -> fetchAll();
        $logStatement -> closeCursor();//optionnel si pas d'autre requête
        
        return $req;
    }

    function getGenres ($bdd) {
        $sqlQuery = "SELECT * FROM genres ORDER BY id ASC";
        $logStatement = $bdd -> prepare($sqlQuery);
        $logStatement -> execute();
        $req = $logStatement -> fetchAll();
        $logStatement -> closeCursor();//optionnel si pas d'autre requête
        
        return $req;
    }
?>