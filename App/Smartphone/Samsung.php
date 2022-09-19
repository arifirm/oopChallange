<?php

class Samsung extends Smartphone implements Screenshot {
    protected $version,
    $merk,
    $volume;

    public function __construct($merk = "merk", $tipe = "tipe", $volume = 0) {
        parent::__construct($tipe);
        $this->merk = $merk;
        $this->volume = $volume;
    }

    public function UI() {
       return __CLASS__ ." OneUI";
    }
    
    public function capture() {
        return "Tekan tombol power + volume up";
    }

    public function setUIVersion($version) {
        return  $this->getMerk() . " " . $this->getTipe() . " OneUI " .  " " . $this->version = $version;
    }


}


?>