<?php

abstract class EnemyShipFactory {
    abstract protected function shipSelector($type);

    public function initShip($type){
        $enemyShip = $this->shipSelector($type);
        $enemyShip->makeShip();

        // additional configuration

        return $enemyShip;
    }
}