<?php

class UFOBossEnemyShip extends EnemyShip {
    private $assembler;

    public function __construct(AssemblerInterface $assembler){
        $this->assembler = $assembler;
    }

    public function makeShip(){
        $this->weapon = $this->assembler->addESGun();
        $this->engine = $this->assembler->addESEngine();

        // additional UFO Boss parts
    }
}