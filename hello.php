<?php

class Movie
{
    
    public $name = 'Nom du film';
    public $description = 'une description';
    public $duration = 120;
    
    public function __construct($name="")
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
    
}

$movie = new Movie("Mon film ");

echo $movie->getName();
$movie->setName("Taxi 3");
echo $movie->getName();