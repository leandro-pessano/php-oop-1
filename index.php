<?php
class Movie {
  public $titolo;
  public $regista;
  public $anno;
  public $durata;
  private $intervalloAnni;

  public function __construct($_titolo) {
    $this->titolo = $_titolo;
  }

  public function IntervalloAnni($romanzo) {
    if ($romanzo) {
      $this->intervalloAnni = $this->anno - $romanzo;
    } else {
      $this->intervalloAnni = '<strong>Film non tratto da un romanzo</strong>';
    }
    return $this->intervalloAnni;
  }

}

$movie1 = new Movie('Arancia Meccanica');
$movie1->regista = 'Stanley Kubrick';
$movie1->anno = 1971;
$movie1->durata = '136 min';

$movie2 = new Movie('Pulp Fiction');
$movie2->regista = 'Quentin Tarantino';
$movie2->anno = 1994;
$movie2->durata = '154 min';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Movies:</h1>

    <h2><?php echo "Titolo: " .$movie1->titolo; ?></h2>
    <h3><?php echo "Regista: " .$movie1->regista; ?></h3>
    <p><?php echo "Anno: " .$movie1->anno; ?></p>
    <p><?php echo "Durata: " .$movie1->durata; ?></p>
    <p><?php echo "Anni tra l'uscita del romanzo e l'uscita del film: " .$movie1->IntervalloAnni(1962); ?></p>

    <h2><?php echo "Titolo: " .$movie2->titolo; ?></h2>
    <h3><?php echo "Regista: " .$movie2->regista; ?></h3>
    <p><?php echo "Anno: " .$movie2->anno; ?></p>
    <p><?php echo "Durata: " .$movie2->durata; ?></p>
    <p><?php echo "Anni tra l'uscita del romanzo e l'uscita del film: " .$movie2->IntervalloAnni(false); ?></p>
  </body>
</html>
