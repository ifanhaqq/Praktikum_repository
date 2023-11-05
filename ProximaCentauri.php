<?php
include_once 'BendaLangit.php';
class ProximaCentauri implements BendaLangit {

    private float $massa;
    private string $warna;

    public function __construct(float $massa, string $warna) {
        $this->massa = $massa;
        $this->warna = $warna;
    }
    public function berevolusi(): void {
        echo 'Proxima Centauri berevolusi terhadap inti galaxy bima sakti';
    }
    public function berotasi():void {
        echo 'Proxima Centauri berotasi';
    }
    public function getInfo():string {
        return 'Proxima centauri memiliki massa sebesar ' . $this->massa . ' M☉ dan memiliki warna ' . ' katai ' . $this->warna;
    }
    

}