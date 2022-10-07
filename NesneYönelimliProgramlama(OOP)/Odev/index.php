<?php

class Sekil{
    public $kenar1;
    public $kenar2;
    public $kenar3;

    public function __construct($kenar1,$kenar2 = null,$kenar3 = null) {
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->kenar3 = $kenar3;
    }
}


class Kare extends Sekil {

    public function alan(){
        return $this->kenar1 * 4;
    }

    public function cevre(){
        return $this->kenar1 * 4;
    }
}

class Dikdortgen extends Sekil {

    public function alan(){
        return $this->kenar1 * $this->kenar2;
    }

    public function cevre(){
        return ($this->kenar1 * 2) + ($this->kenar2 * 2);
    }
}

class Ucgen extends Sekil {

    public function alan(){
        return ($this->kenar1 * $this->kenar2 * $this->kenar3) / 2;
    }

    public function cevre(){
        return $this->kenar1 + $this->kenar2 + $this->kenar3;
    }
}


$kare = new Kare(3);
echo "Kare cevresi: ".$kare->cevre();
echo "<br>";
echo "Kare alanı: ".$kare->alan();
echo "<br>";

$dikdortgen = new Dikdortgen(3,5);
echo "Dikdortgen cevresi: ".$dikdortgen->cevre();
echo "<br>";
echo "Dikdortgen alanı: ".$dikdortgen->alan();
echo "<br>";

$ucgen = new Ucgen(3,8,9);
echo "Ucgen cevresi: ".$ucgen->cevre();
echo "<br>";
echo "Ucgen alanı: ".$ucgen->alan();