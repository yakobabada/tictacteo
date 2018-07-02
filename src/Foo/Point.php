<?php

namespace Foo;

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @param Point $point
     * @return bool
     */
    public function hasSamePosition(Point $point): bool
    {
        if ($this->x === $point->x && $this->y === $point->y) {
            return true;
        }

        return false;
    }
}