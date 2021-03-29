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
}

$calc = new calc();
if (isset($_POST['plus'])) {
    $cn = $calc->plus($_POST['n1'], $_POST['n2']);
}
if (isset($_POST['min'])) {
    $cn = $calc->min($_POST['n1'], $_POST['n2']);
}
if (isset($_POST['div'])) {
    $cn = $calc->div($_POST['n1'], $_POST['n2']);
}
if (isset($_POST['multi'])) {
    $cn = $calc->multi($_POST['n1'], $_POST['n2']);
}
if (isset($_POST['ref'])){
    header('location:index4.php');
}
