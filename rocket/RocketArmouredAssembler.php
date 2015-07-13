<?php

class RocketArmouredAssembler implements AssemblerInterface {
    public function addESGun(){
        return new ESRocketArmouredWeapon;
    }

    public function addESEngine(){
        return new ESRocketArmouredEngine;
    }
}