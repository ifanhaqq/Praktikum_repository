<?php

include_once "BendaLangit.php";

class Bumi implements BendaLangit {
    public function berotasi(): void{
        echo "Rotasi adalah gerakan putaran Bumi di sekitar sumbunya sendiri.";
    }
    public function berevolusi(): void{
        echo "Evolusi Bumi mengacu pada perubahan jangka panjang dalam sejarah Bumi sebagai planet.";
    }
}