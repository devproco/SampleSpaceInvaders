<?php

class RocketAssembler implements AssemblerInterface {
    public function addESGun(){
        return new ESRocketWeapon;
    }

    public function addESEngine(){
        return new ESRocketEngine;
    }
}