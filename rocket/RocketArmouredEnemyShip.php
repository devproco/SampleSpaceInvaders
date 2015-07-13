<?php

class RocketArmouredEnemyShip extends EnemyShip {
    private $assembler;

    public function __construct(AssemblerInterface $assembler){
        $this->assembler = $assembler;
    }

    public function makeShip(){
        $this->weapon = $this->assembler->addESGun();
        $this->engine = $this->assembler->addESEngine();

        // additional Rocket parts
    }
}