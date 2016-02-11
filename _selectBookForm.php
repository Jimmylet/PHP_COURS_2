<?php

/**
 * _selectBookForm.php
 * Créé par : Jimmy Letecheur
 * Date : 11/02/16
 */
?>

<?php if(isset($errors['invalidISBN'])): ?>
<div>
    <p><?php echo $errors['invalidISBN']; ?></p>
</div>
<?php endif ?>

<form method="get" action="index.php" id="bookform">
    <select name="book">
      <?php foreach ($books as $someBook) : ?>
      <option value="<?php echo $someBook[0]; ?>"><?php echo $someBook[1]; ?></option>
      <?php endforeach; ?>
    </select>
    <input type="submit" value="Me montrer ce livre" />
</form>