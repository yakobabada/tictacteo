<?php

namespace Foo;

class ClassicTicTacToe implements TicTacToeInterface
{
    /**
     * @var null|string
     */
    public $whoPlay = null;

    /**
     * @var null|Point
     */
    public $pX = null;

    /**
     * @var null|Point
     */
    public $pO = null;

    /**
     * @inheritdoc
     */
    public function putX(int $x, int $y): void
    {
        $this->pX = new Point($x, $y);
        $this->checkFieldTaken();

        $this->whoPlay = 'X';
    }

    /**
     * @inheritdoc
     */
    public function putO(int $x,int $y): void
    {
        $this->pO = new Point($x, $y);
        $this->checkFieldTaken();

        $this->whoPlay = 'O';
    }

    /**
     * @inheritdoc
     */
    public function isEnded(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function isTied(): bool
    {
        return true;
    }


    /**
     * @inheritdoc
     */
    public function getWinner(): string
    {
        return $this->whoPlay;
    }

    /**
     * @throws FieldTakenException
     */
    public function checkFieldTaken()
    {
        if ($this->pX !== null && $this->pO !== null) {
            if ($this->pX->hasSamePosition($this->pO)) {
                throw new FieldTakenException('Field taken');
            }
        }
    }
}