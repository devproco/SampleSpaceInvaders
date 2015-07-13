<?php

class UFOSelector extends EnemyShipFactory {
    public function shipSelector($type){
        switch($type){
            case 'UFO':
                $assembler = new UFOAssembler();
                $theShip = new UFOEnemyShip($assembler);
                $theShip->setName("UFO Enemy Grunt Ship");
                break;
            case 'UFO BOSS':
                $assembler = new UFOBossAssembler();
                $theShip = new UFOBossEnemyShip();
                $theShip->setName("UFO Enemy Boss Ship");
                break;
            default:
                $theShip = null;
        }

        return $theShip;
    }
}