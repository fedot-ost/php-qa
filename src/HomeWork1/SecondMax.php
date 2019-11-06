<?php

namespace HomeWork1;

class SecondMax
{
    public function getSecondMax($arr)
    {
        $max = 0;
        $secondMax = 0;

        foreach ($arr as $elem) {
            if ($elem > $max) {
                $secondMax = $max;
                $max = $elem;
            }
        }

        return $secondMax;
    }
}
