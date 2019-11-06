<?php

namespace HomeWork1;

class CountIt
{
    public function count($digital, $num) {
        return substr_count($num, $digital);
    }
}
