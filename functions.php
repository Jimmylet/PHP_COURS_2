<?php
/**
 * functions.php
 * Créé par : Jimmy Letecheur
 * Date : 11/02/16
 */

// Ecriture d'un programme qui sert à réccupérer un tableau depuis le fichier csv

//Ecrire une constante pour le nom du fichier car elle ne va jamais changer. Une constante est toujours globale.
    function getBooksArrayFromCSVFile()
    {
        $books = [];
        if(!file_exists(FILENAME)){ // Regarde si il trouve la valeur de filename, ici data.csv (! devant = if not)
            return $books;
        }
        $handle = fopen(FILENAME, 'r' ); // fopen = ouvrir le fichier, 'r' On utilise le fichier uniquement pour le lire.
        while(($book = fgetcsv($handle, 1000, ';')) !== false){ //fgetcsv : prendre le fichier csv
            $books[] = $book; // Books va être rempli par des book
        }

        fclose($handle); //Fermer le fichier
        return $books;
    }

    function getBookArrayFromISBN($isbn, $books = null) //Cete fonction va retourner un livre
    {
        if(is_null($books)){
            return $books;
        }
        $nbBooks = count($books);
        $i = 0;
        while (($isbn != $books[$i][0]) && ($i < $nbBooks - 1)) { //Je passe en revue tous les livres du tableaux books, le i ème livre est comparé avec l'isbn qui est fournit a la fonction.
            $i++;
        }
        if($isbn === $books[$i][0]) {
            return $books[$i];
        }

        return null;
    }

