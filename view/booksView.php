<!DOCTYPE html>
<html lang="fr">
<?php
    include_once("../module/head.php");
?>
<body>
    <?php
        include_once("../module/header.php");

        
    ?>

    <main>
        <h2> Liste des livres </h2>

        
        <?php
            foreach($genreList as $genre){
            ?>
                <div class="genreList">
                    <h3><?php echo($genre["genre"]); ?></h3>
                </div>

            <div class="booksTable">
                <div class="bookLine firstLine">
                    <div class="bookBox title">Titre</div>
                    <div class="bookBox author">Auteur</div>
                    <div class="bookBox genre">Genre</div>
                    <div class="bookBox date">Date</div>           
                </div>
            <?php
                foreach($bookList as $book) {
                    
                    if($book['genre']===$genre["genre"]) {
                    ?>

                    <div class="bookLine">
                        <div class="bookBox title"><?php echo($book['titre']); ?></div>
                        <div class="bookBox author"><?php echo($book['auteur']); ?></div>
                        <div class="bookBox genre"><?php echo($book['genre']); ?></div>
                        <div class="bookBox date"><?php echo($book['date']); ?></div>   
                    </div>
                <?php
                    }}
                ?>
            </div>
            
            <?php
            }
        ?>
        

        
    </main>
    <?php include_once("../module/logPopUp.php");?>
    <script src="../js/showBooks.js"></script>
</body>
</html>