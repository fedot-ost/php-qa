<?php

namespace HomeWork1;

class Brevity
{
    public function makeItBrevity($str) {
        $res = [];

        foreach (explode(' ', $str) as $index => $elem) {
            !($index) ? $res[] = $elem : $res[] = mb_substr($elem, 0, 1) . '.';
        }

        return join(' ', $res);
    }
}
