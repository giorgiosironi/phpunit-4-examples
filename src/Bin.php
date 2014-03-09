<?php

class Bin
{
    private $color;

    public function fillWith(Paint $paint)
    {
        $this->color = $paint->color();
    }

    public function color()
    {
        return $this->color;
    }
}

