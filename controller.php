<?php
//Préparer les variables.
$notes = [
    "Xor" => 15,
    "Bob" => 16,
    "Max" => 2,
    "Tom" => 18,
    "Eav" => 20,
];
$moyenne = $notes ? round(array_sum($notes) / count($notes), 2) : 0;
// Rendre la vue.
require 'view.php';
