<?php

abstract class Piece {
    protected $x_position;
    protected $y_position;
    protected $color;
    protected $name;

    public function getColor(){
        return $this->color;
    }
    public function getX_position(){
        return $this->x_position;
    }
    public function getY_position(){
        return $this->y_position;
    }
    public function __construct($color, $x_position, $y_position){
        $this->color = $color;
        $this->x_position = $x_position;
        $this->y_position = $y_position;
    }

    public function __toString(){
        return "{$this->color} {$this->name} on {$this->x_position}{$this->y_position}";
    }

    public function move($x_pos, $y_pos){
        if ($this->canMove($x_pos, $y_pos)){
            $this->x_position = $x_pos;
            $this->y_position = $y_pos;
            return "{$this->color} {$this->name} move to {$this->x_position}{$this->y_position}";
        }
        else{
            return "{$this->color} {$this->name} can't move to {$x_pos}{$y_pos}";
        }
    }

    abstract public function canMove($x_pos, $y_pos);
}