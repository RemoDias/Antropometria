<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Slaughter
 *
 * @author Rômulo
 */
class Slaughter {
    protected $ptmedia;
    protected $triceps;

    function __construct() {
        
    }

    function getPtmedia() {
        return $this->ptmedia;
    }

    function getTricepis() {
        return $this->triceps;
    }

    function setPtmedia($ptmedia) {
        $this->ptmedia = $ptmedia;
    }

    function setTricepis($tricepis) {
        $this->triceps = $tricepis;
    }


}
