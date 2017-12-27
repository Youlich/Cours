<?php

require 'Papa.php'; /**classe parente toujours en premier*/
require 'Enfant.php';


echo (new Enfant)->herite();
/** remplace $enfant = new Enfant; avec echo $enfant->herite();*/
