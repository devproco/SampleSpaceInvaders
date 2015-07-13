<?php


class RocketSelector extends EnemyShipFactory {
    public function shipSelector($type){
        switch($type){
            case 'Rocket':
                $assembler = new RocketAssembler;
                $theShip = new RocketEnemyShip($assembler);
                $theShip->setName("Rocket Enemy Ship");
                break;
            case 'Armoured Rocket':
                $assembler = new RocketArmouredAssembler;
                $theShip = new RocketArmouredEnemyShip($assembler);
                $theShip->setName("Armoured Rocket Ship");
                break;
            default:
                $theShip = null;
        }

        return $theShip;
    }
}