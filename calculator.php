<?php

class calc
{
    public function plus($n1, $n2)
    {
        return $n1 + $n2;
    }

    public function min($n1, $n2)
    {
        return  $n1 - $n2;
    }

    public function div($n1, $n2)
    {
        return  $n1 / $n2;
    }

    public function multi($n1, $n2)
    {
        return  $n1 * $n2;
    }
    public function refresh($location)
    {
        header('location:'.$location);
    }
}
}
