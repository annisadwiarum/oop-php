<?php

abstract class Komputer {
    private $colour;

    abstract public function brand();

    public function setColou($colour) {
        $this->colour = $colour;
    }
}