<?php

include_once "BendaLangit.php";

class Matahari implements BendaLangit {
    public function berotasi(): void{
        echo "Rotasi adalah gerakan putaran Matahari di sekitar sumbunya sendiri.";
    }
    public function berevolusi(): void{
        echo "Evolusi Matahari mengacu pada perubahan jangka panjang dalam hidup Matahari sebagai bintang.";
    }
}