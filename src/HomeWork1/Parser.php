<?php

namespace HomeWork1;

class Parser
{
    public function __construct($str)
    {
        $this->str = $str;
    }

    public function getLinks()
    {
        preg_match('/href=\'(.+)\'>/', $this->str, $match);

        return $match[1];
    }

    public function getPhones()
    {
        preg_match('/(\+.*\d)\s/', $this->str, $match);

        return $match[1];
    }
}
