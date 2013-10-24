<?php

class King extends Piece {
    public function __construct($color, $x, $y){
        $this->name = 'King';
        parent::__construct($color, $x, $y);
    }

    public function canMove($x, $y){
        //TODO implenemt move check
        return true;
    }
}