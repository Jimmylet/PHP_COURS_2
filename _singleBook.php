<?php include '_selectBookForm.php'; ?>
<div class="book">
<h1>Fiche du livre : <?php echo $book[1] ?></h1>
    <div class="info_livre">
        <ul>
            <li>Auteur : <?php echo $book[2] ?></li>
            <li>Résumé : <?php echo $book[3] ?></li>
            <li>Cote : <?php echo $book[4] ?></li>
            <li>ISBN : <?php echo $book[0] ?></li>
        </ul>
    </div>
</div>



