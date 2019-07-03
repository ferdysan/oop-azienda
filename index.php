<?php

// ciao ragazzi, oggi pomeriggio provate a modellizzare la gerarchia di classi per rappresentare i dipendenti di un'azienda (repo: oop-azienda).
// Prendete pure spunto dall'esempio del fattorino (classe Persona generica e una sottoclasse ad esempio Dipendente che la estende).
// Se volete potete pure ampliare l'esercizio considerando anche ad esempio i collaboratori esterni oppure rendendo più specifico ancora il concetto di dipendente.
// Decidete voi le varie proprietà e la loro visibilità, l'importante è che cerchiate di scrivere codice pulito, estensibile e manutenibile

require 'Impiegato.php';


$nuovo_impiegato = new Impiegato('Marco', 'Rossi', 'Maschio','5555','3333','4444');


echo "<pre>";
var_dump($nuovo_impiegato);
echo "</pre>";





 ?>
