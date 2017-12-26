<?php
/**
 * Created by PhpStorm.
 * User: jutat
 * Date: 25/12/2017
 * Time: 17:33
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
}

/**creation de l'objet, on instancie la classe*/

$Julie = new Person ('Julie','Tatibouet', '39');
var_dump($Julie->_firstName);
var_dump($Julie->_lastName);
var_dump($Julie->_age);



