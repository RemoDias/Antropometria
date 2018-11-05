<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pollock
 *
 * @author Rômulo
 */
class Pollock {
    protected $toracica;
    protected $axilarMedia;
    protected $triceps;
    protected $subescapular;
    protected $abdominal;
    protected $suprailiaca;
    protected $coxa;
    
    function __construct() {
        
    }

    function getToracica() {
        return $this->toracica;
    }

    function getAxilarMedia() {
        return $this->axilarMedia;
    }

    function getTriceps() {
        return $this->triceps;
    }

    function getSubescapular() {
        return $this->subescapular;
    }

    function getAbdominal() {
        return $this->abdominal;
    }

    function getSuprailiaca() {
        return $this->suprailiaca;
    }

    function getCoxa() {
        return $this->coxa;
    }

    function setToracica($toracica) {
        $this->toracica = $toracica;
    }

    function setAxilarMedia($axilarMedia) {
        $this->axilarMedia = $axilarMedia;
    }

    function setTríceps($triceps) {
        $this->triceps = $triceps;
    }

    function setSubescapular($subescapular) {
        $this->subescapular = $subescapular;
    }

    function setAbdominal($abdominal) {
        $this->abdominal = $abdominal;
    }

    function setSuprailíaca($suprailiaca) {
        $this->suprailiaca = $suprailiaca;
    }

    function setCoxa($coxa) {
        $this->coxa = $coxa;
    }


}
