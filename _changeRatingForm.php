<?php
/**
 * _changeRatingForm.php
 * Créé par : Jimmy Letecheur
 * Date : 11/02/16
 */
?>

<div class="ratingChange">
    <form action="index.php" method="post">
        <label for="rating">Changer la cote</label>
        <input type="number" name="rating" id="rating" min="0" max="10" step="1" value="<?php echo $book[4]; ?>">
        <input type="hidden" name="isbn" value="<?php echo $book[0]; ?>">
        <input type="submit" value="Changer la cote">
    </form>
</div>
