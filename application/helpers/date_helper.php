<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

function explodeDate($date)
{
    $date = trim($date);
    if (!empty($date) && $date != null) {
        if (strpos($date, "/") !== false) {
            $date = explode('/', $date);
            $date = $date[2] . '-' . $date[1] . '-' . $date[0];
        }
        return $date;
    }
    return null;
}

function formatDateToView($date)
{
    if (!empty($date) && $date != null) {
        if (strpos($date, "-")) {
            $date = date('d/m/Y', strtotime($date));
        }
        return $date;
    }
    return null;
}

function validateNumber($num)
{
    if (!empty($num) && $num != "") {
        return $num;
    }
    return 0;
}
