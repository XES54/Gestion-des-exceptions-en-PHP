<?php
class Animal {
    private string $_nom;
    private int $_age;
    private string $_type;

    public function __construct($nom, $age, $type) 
    {
        $this->_nom = $nom;
        $this->_age = $age;
        $this->_type = $type;
    }

    public function getnom() {
        return $this->_nom;
    }

    public function getage() {
        return $this->_age;
    }

    public function gettype() {
        return $this->_type;
    }

    public function setNom($nom) {
        $this->_nom = $nom;
    }

    public function setage($age) {
        if ($age > 0) {
            $this->_age = $age;
        }
        else {
            $this->_age =0;
        echo("L'âge de l'animal ne peut pas être négatif !");
        }
    }

    public function settype($type) {
        $listtype = array("mammifère", "oiseau", "reptile");
        if (in_array($type, $listtype)) {
            $this->_type = $type;
        }
        else {
            echo("Le type de l'animal doit être : mammifère, oiseau ou reptile.");
        }
    }

    public function __toString() {
       return  "Nom : $this->_nom. Age: $this->_age. Type : $this->_type";
    }

    public function faireDuBruit() {
        echo ("L'animal fait du bruit.");
    }
}

class Mammifere extends Animal {

    private string $couleur_pelage;

    public function couleur_pelage($couleur_pelage) {
        return $this->couleur_pelage;
    }
    
    public function courir() {
        echo ("Le mannifère cours.");
    }

    public function faireDuBruit() {
        echo ("Le mammifère rugit.");
    }
}

class Oiseau extends Animal {
    
    private string $_plumage;

    public function plumage($_plumage) {
        return $this->_plumage;
    }
    
    public function voler() {
        echo ("L'oiseau vole.");
    }

    public function faireDuBruit() {
        echo ("L'oiseau gazouille.");
    }
}

class Reptile extends Animal {

    private string $couleur_ecaille;

    public function couleur_ecaille($couleur_ecaille) {
        return $this->couleur_ecaille;
    }
    
    public function ramper() {
        echo ("Le reptile rampe.");
    }

    public function faireDuBruit() {
        echo ("Le reptile siffle.");

    }
}

?>