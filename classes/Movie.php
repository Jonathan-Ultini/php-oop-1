<?php

// Definizione della classe Movie
class Movie
{
  public $title;
  public $director;
  public $year;
  public $genres;

  // Costruttore per inizializzare le proprietà
  public function __construct($title, $director, $year, $genres = [])
  {
    $this->title = $title;
    $this->director = $director;
    $this->year = $year;
    $this->genres = $genres;
  }

  // Metodo per ottenere una lista dei generi come stringa
  public function getGenres()
  {
    return implode(", ", $this->genres); // Converte l'array in una stringa separata da virgole
  }

  // Metodo per ottenere informazioni sul film
  public function getMovieInfo()
  {
    return "Title: " . $this->title .
      ", Director: " . $this->director .
      ", Year: " . $this->year .
      ", Genres: " . $this->getGenres();
  }
}
