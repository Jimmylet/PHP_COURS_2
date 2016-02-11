<?php
/**
 * mainLogic.php
 * Créé par : Jimmy Letecheur
 * Date : 11/02/16
 */

    $books = getBooksArrayFromCSVFILE();

    if(isset($_GET['book'])){
        $isbn = $_GET['book'];
        $book = getBookArrayFromISBN($isbn, $books);

        if(!is_null($book)){

        $view = '_singleBook.php';
        $pageName = $book[1];
        }else{
            $errors['invalidISBN'] = 'Le livre demandé n’existe pas';
        }
    }
?>