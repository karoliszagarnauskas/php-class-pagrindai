<?php
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()', kuri daro echo "Einu einu..."


/**
 *
 */
class Zmogus
{
    public $ugis = 0;
    public $vardas = "bevardis";

    //sita f-ja bus paleista automatiskai kai naudosim zodeli new
public function __construct($vard,$ug){
  $this->ugis = $ug;
  $this->vardas = $vard;


}

    public function einu() {
          $this->ugis = 155;
        echo "Einu einu jau einu";
    }
}
