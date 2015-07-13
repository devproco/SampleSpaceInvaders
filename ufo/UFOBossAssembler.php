<?php

class UFOBossAssembler implements AssemblerInterface {
    public function addESGun(){
        return new ESUFOBossWeapon;
    }

    public function addESEngine(){
        return new ESUFOBossEngine;
    }
}