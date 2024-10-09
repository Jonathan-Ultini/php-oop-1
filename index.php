<?php

// Includi il file della classe Movie
require_once __DIR__ . '/classes/Movie.php';

// Istanziamento di due oggetti Movie
$movie1 = new Movie("Il cosmo sul comó", "Marcello Cesena", 2008);
$movie2 = new Movie("Replicas", "Jeffrey Nachmanoff", 2019);

// Stampa dei valori delle proprietà degli oggetti
echo $movie1->getMovieInfo();
echo "<br>";
echo $movie2->getMovieInfo();
