<?php

namespace HomeWork1;

use DeepCopy\f001\B;
use phpDocumentor\Reflection\Types\Boolean;

class FizzBuzz
{
    public function fb($num)
    {
        $threeCheck = !($num%3);
        $fiveCheck = !($num%5);

        if ($threeCheck && $fiveCheck) return 'fizzbuzz';

        if ($threeCheck) return 'fizz';

        if ($fiveCheck) return 'buzz';

        return $num;
    }
}
