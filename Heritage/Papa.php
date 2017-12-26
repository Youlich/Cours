<?php
/**classe parent*/

class Papa
{
    protected function getNbEnfant() /** protected permet d'accéder aux méthodes
     * dans cette classe mais aussi dans la classe enfant mais c'est tout, elle ne sera
     * pas accessible dans le fichier Heritage.php */
    {
    return 1;
    }
}