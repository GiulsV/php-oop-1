<?php
 
    class Movie {
        
        public $title;
        public $regista;
        public $year;
        public $type;
        

        function __construct($_title, $_regista, $_year, $_type){
            $this->title = $_title;
            $this->regista = $_regista;
            $this->year = $_year;
            $this->type = $_type;
        }  
   
    }

    //istanza della classe Movie
    $the_truman_show = new Movie('The Truman Show','Peter Weir', 1998, 'Film');
    
    $la_citta_incantata = new Movie('La città incantata','Hayao Miyazaki', 2001, 'Animazione');

    //movies array
    $movies = [$the_truman_show,  $la_citta_incantata];

   
?>