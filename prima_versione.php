<?php

//inizializzazione oggetto
class Movie{
    //variabili necessarie alla creazione della istanza
    public $title;
    public $year;
    public $type;



    //costruttore con le variabili necessarie alla creazione dell'istanza
    function __construct($_title, $_year, $_type){
        $this->title = $_title;
        $this->year = $_year;
        $this->type = $_type;
    }

    //metodo per stampare le informazioni dell'oggetto Movie
    public function printInfo(){
        $info = [
            'title' => $this->title,
            'year' => $this->year,
            'type' => $this->type,
         ];
        echo '<h1>'. $info['title'].'</h1>';
        foreach ($info as $info_key => $info_value) {
            if ($info_key == 'genres') {
                echo '<p>'.$info_key.': ';
                foreach ($info_value as $genre_key => $genre_value) {
                    echo $genre_value.' ';
                }
                echo '</p>';
            }else{
                echo '<p>'.$info_key.': '.$info_value.'<p>';
            }
        }
    }

}


//creo una nuova istanza della classe Movie
$the_truman_show = new Movie('The Truman Show', 1998, 'Film');

$the_truman_show->printInfo();
// var_dump($the_truman_show_info);


//creo una nuova istanza della classe Movie
$la_citta_incantata = new Movie('La città incantata', 2001, 'Animazione');

$la_citta_incantata->printInfo();
// var_dump($la_citta_incantata_info);


?>
