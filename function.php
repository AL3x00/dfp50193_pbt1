<?php
$service = $_POST['service'];
if (isset($_POST['wash'])) {
    $wash = $_POST['wash'];
} else {
    $wash = '';
}

function totalprice($total)
{
    $service = $_POST['service'];
    $wash = $_POST['wash'];
    $moisture = $_POST['moisture'];
    $relax = $_POST['relax'];
    $bleach = $_POST['bleach'];

    if ($service == 'haircut') {
        if ($wash == 'wash') {
            $total = +15;
        } else {
            $total = +10;
        }
    } elseif ($service == 'hairtreatment') {
        if ($moisture == 'moisture') {
            $total = +25;
        } elseif ($relax == 'relax') {
            $total = +25;
        } else {
            $total = +20;
        }
    } elseif ($service == 'hairdye') {
        if ($bleach == 'bleach') {
            $total = +25;
        } else {
            $total = +50;
        }
    } else {
        $total = 0;
    }
    return $total;
}
