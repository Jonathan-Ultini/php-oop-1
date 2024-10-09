<?php

// Definizione della classe Movie
class Movie
{
  public $title;
  public $director;
  public $year;

  // Costruttore per inizializzare le proprietà
  public function __construct($title, $director, $year)
  {
    $this->title = $title;
    $this->director = $director;
    $this->year = $year;
  }

  // Metodo per ottenere informazioni sul film
  public function getMovieInfo()
  {
    return "Title: " . $this->title . ", Director: " . $this->director . ", Year: " . $this->year;
  }
}
