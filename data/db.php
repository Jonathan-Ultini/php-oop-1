<?php

require_once __DIR__ . '/../classes/Movie.php';

// Array di oggetti Movie
$movies = [
  new Movie("Inception", "Christopher Nolan", 2010, ["Action", "Sci-Fi", "Thriller"]),
  new Movie("The Matrix", "Lana Wachowski, Lilly Wachowski", 1999, ["Action", "Sci-Fi", "Adventure"]),
  new Movie("Interstellar", "Christopher Nolan", 2014, ["Adventure", "Drama", "Sci-Fi"]),
  new Movie("The Dark Knight", "Christopher Nolan", 2008, ["Action", "Crime", "Drama"]),
  new Movie("Il cosmo sul comó", "Marcello Cesena", 2008, ["Commedy"]),
  new Movie("Replicas", "Jeffrey Nachmanoff", 2019, ["Sci-Fi", "Thriller"])
];
