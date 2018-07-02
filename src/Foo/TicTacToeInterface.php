<?php

namespace Foo;

interface TicTacToeInterface
{

    /**
     * $x,$y - 0-2
     * @param $x integer
     * @param $y integer
     */
    public function putX(int $x, int $y): void;

    /**
     * $x,$y - 0-2
     * @param $x integer
     * @param $y integer
     */
    public function putO(int $x,int $y): void;

    public function isEnded(): bool;

    public function isTied(): bool;

    /**
     * ('X' or 'Y')
     * @return string
     */
    public function getWinner(): string;
}