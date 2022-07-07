<?php
//classe
    include('movie.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movies - OOP</title>
    
</head>
<body>
 
    <header>
       <h1>Movies - OOP</h1> 
    </header>
    
   <main>
    <?php
        foreach ($movies as $movie) {
            echo('<div class="card"');
                echo'<ul>';
                    echo('<li>'.'<h2>'. "Titolo: " . $movie->title . '</h2>'. '</li>');
                    echo('<li>'.'<h4>'. "Regista: " . $movie->regista. '</h4>'.'</li>');
                    echo('<li>'.'<h4>'. "Anno: " . $movie->year . '</h4>'.'</li>');
                    echo('<li>'.'<h4>'. "Genere: " . $movie->type . '</h4>'.'</li>');
                echo('</ul>');
            echo('</div>');
        }
    ?>
    </main>
</body>
</html>