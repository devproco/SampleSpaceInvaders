<?php

class UFOAssembler implements AssemblerInterface {
    public function addESGun(){
        return new ESUFOWeapon();
    }

    public function addESEngine(){
        return new ESUFOEngine();
    }
}