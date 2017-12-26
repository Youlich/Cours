<?php
/**La classe enfant herite de la classe papa, elle herite de ses fonctions*/

class Enfant extends Papa
{
    public function herite()
    {
        return $this->getNbEnfant(); /** création d'une fonction public dans la classe enfant pour pouvoir utiliser
 * la fonction protected de la classe parent dans dans Heritage.php */
    }
}