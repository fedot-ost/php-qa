<?php

namespace HomeWork1;

class TicTacToe
{
    public function check($playingField)
    {
        [$horizontals, $verticals, $diagonals] = $this->constructCombinations($playingField);
        $horizontalWinner = $this->isSame($horizontals);
        $verticalWinner = $this->isSame($verticals);
        $diagonalWinner = $this->isSame($diagonals);

        if ($horizontalWinner) return $horizontalWinner[0];
        if ($verticalWinner) return $verticalWinner[0];
        if ($diagonalWinner) return $diagonalWinner[0];

        return false;
    }

    public function constructCombinations($playingField)
    {
        $horizontals = [];
        $verticals = [
            [],
            [],
            [],
        ];
        $diagonals = [
            [],
            []
        ];

        foreach ($playingField as $y => $horizontal) {
            $horizontals[] = $horizontal;

            foreach ($horizontal as $x => $sign) {
                $verticals[$x][$y][] = $sign;

                if ($x === $y) {
                    $diagonals[0][] = $sign;

                    if ($x === 1) {
                        $diagonals[1][] = $sign;
                    }
                }

                if (($x === 0 && $y === 2) || (($x === 2 && $y === 0))) {
                    $diagonals[1][] = $sign;
                }
            }
        }

        return [$horizontals, $verticals, $diagonals];
    }

    public function isSame($combinations) {
        foreach ($combinations as $combination) {
            if ($combination[0] === $combination[1] && $combination[0] === $combination[2]) {
                return $combination;
            }
        }

        return false;
    }
}
