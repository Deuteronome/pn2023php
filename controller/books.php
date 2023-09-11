<?php

    include_once("../model/model.php");

    $booksBDD = connectDB();
    $genreList = getGenres($booksBDD);
  
    if(isset($_POST["genre"])) {
        $bookList = getBooksByGenre($booksBDD, $_POST["genre"]);
    } else {
        $bookList = getAllBooks($booksBDD);
    }
    
    
    
    
       
    

    $pageTitle = "Livres";
    $title = "Liste des livres";
    $navList= [[
        "label" => 'Accueil',
        "link" => './home.php'
    ],[
        "label" => 'Livres',
        "link" => './books.php'
    ],[
        "label" => 'Ajout',
        "link" => './addBooks.php'
    ]
    ];
    if(isset($_POST["userName"])) {
        $greeting = "<p>Bonjour". $_POST["userName"]." </p>";
    } else {
        $greeting = "<p>Bonjour bel(le) inconnu(e)</p>";
    }

    include_once("../view/booksView.php");
?>

