<?php

require 'Papa.php'; /**classe parente toujours en premier*/
require 'Enfant.php';

$enfant = new Enfant; /** création d'un objet enfant de la classe enfant */
echo $enfant->herite(); /**fonction public de la classe enfant car l'autre fonction
 * de la classe parent était protected */