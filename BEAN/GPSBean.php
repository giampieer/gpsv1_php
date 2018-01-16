<?php

class GPSBean{
    public $codgo;
    public  $lugar;
    function getCodgo() {
        return $this->codgo;
    }

    function getLugar() {
        return $this->lugar;
    }

    function setCodgo($codgo) {
        $this->codgo = $codgo;
    }

    function setLugar($lugar) {
        $this->lugar = $lugar;
    }


}

