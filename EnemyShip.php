<?php

abstract class EnemyShip {
    private $name;
    protected $weapon;
    protected $engine;

    abstract public function makeShip();

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function outputStatusText(){
        $speed = $this->engine->outputSpeedText();
        $damage = $this->weapon->outputDamageText();
        $info = "Status: The " . $this->name . " has a top speed of " . $speed . " and an attack power of " . $damage . ".";
        return $info;
    }
}