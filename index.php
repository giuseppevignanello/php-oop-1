<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà.
Tra le varie proprietá, la classe Movie 'ha un' genere (sfruttare il concetto di composizione).
Bonus 1:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
Possiamo ad esempio organizzare il codice:
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
Bonus 2 (opzionale)
Modificare la classe Movie in modo che accetti piú di un genere. -->

<?php
class Movie
{
    public $title;
    public $genre;
    public $director;

    function __construct($_genre)
    {
        $this->genre = $_genre;
    }

    public function getGenre()
    {
        return $this->genre;
    }
}

$avatar = new Movie("Science Fiction");
$avatar->title = "Avatar";
$avatar->director = "James Cameron";

$titanic = new Movie("Drama");
$titanic->title = "Titanic";
$titanic->director = "James Cameron";

$starWars = new Movie("Science Fiction");
$starWars->title = "Star Wars";
$starWars->director = "George Lucas";

var_dump($avatar);
var_dump($titanic);
var_dump($starWars)





?>