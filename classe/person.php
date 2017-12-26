<?php
/**
getters et setters
 */
class Person
{
    public $_firstName;
    public $_lastName;
    public $_age;

    public function __construct($_firstName,$_lastName,$_age)
    {
        $this->_firstName=$_firstName;
        $this->_lastName=$_lastName;
        $this->_age=$_age;
    }
    public function fullName()
    {
        return $this->_firstName . " " . $this->_lastName;
    }
}

/**creation de l'objet, on instancie la classe*/

$Julie = new Person ('Julie','Tatibouet', '39');

$nomcomplet = $Julie->fullName(); /** on affiche le nom complet */

echo $nomcomplet;



