<?php

class Movie {
    public $title;
    public $year;
    public $director;
    public $genre;
    protected $original_language;
    public $plot = null;

    public function __construct($titleP, $yearP, $directorP, $genreP = null)
    {
        $this->title = $titleP;
        $this->year = $yearP;
        $this->director = $directorP;
        $this->genre = $genreP;
        $this->setOriginalLanguage();
    }

    public function getTitle() {
        return $this->title;
    }
    
    public function getYear() {
        return $this->year;
    }
    
    public function getDirector() {
        return $this->director;
    }
    
    public function getGenre() {
        return $this->genre;
    }

    protected function setOriginalLanguage() {
        $this->original_language = 'en';
    }

    public function getOriginalLanguage() {
        return $this->original_language;
    }

    public function setPlot($plotP) {
        $this->plot = $plotP;
    }

    public function getPlot() {
        if ($this->plot == null) {
            $this->plot = 'Plot not available.';
        }
        return $this->plot;
    }
}