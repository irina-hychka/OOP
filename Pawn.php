<?php

class Рawn extends Piece {
    public function __construct($color, $x, $y){
        $this->name = 'Pawn';
        parent::__construct($color, $x, $y);
    }

    public function canMove($x, $y){
        //TODO implement move check
        return true;
    }
}