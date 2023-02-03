<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    
class Movie {
    public $title;
    public $publication_date;
    public $og_language;

    public function __construct($movie_title, $movie_publication_date, $movie_og_language){
        $this->title = $movie_title;
        $this->publication_date = $movie_publication_date;
        $this->og_language = $movie_og_language;
    }

    public function isItalian(){
        $lang = $this->og_language;
        $message = '';
        if ($lang == 'it'){
            $message = 'Il film è italiano';
        } else{
            $message = 'Il film non è italiano';
        }
        return $message;
    }
}


$lotr_3 = new Movie('Il Signore degli Anelli - Il ritorno del re', '17 dicembre 2003', 'en');
$fantozzi = new Movie('Fantozzi', '27 marzo 1975', 'it');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        foreach($lotr_3 as $key=>$value){
            echo '<pre>';
            echo $value;
            echo '</pre>';
        };
        echo $lotr_3->isItalian();

        echo '<br>';
        foreach($fantozzi as $key=>$value){
            echo '<pre>';
            echo $value;
            echo '</pre>';
        };
        echo $fantozzi->isItalian();
    ?>
</body>

</html>