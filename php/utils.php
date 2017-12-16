<?php

function generateToken() {
    $num1 = rand(10000, 99999);
    $num2 = rand(10000, 99999);
    $num3 = rand(10000, 99999);

    $mod1 = $num1 % 13;
    $mod2 = $num2 % 15;
    $mod3 = $num3 % 16;

    $num1 = $num1 - ($mod1-3);
    $num2 = $num2 - ($mod2-7);
    $num3 = $num3 - ($mod3-5);

    return "$num1.$num2.$num3";
}

function validateToken($token)
{
    $parts = explode(".", $token);

    $mod1 = intval($parts[0]) % 13;
    $mod2 = intval($parts[1]) % 15;
    $mod3 = intval($parts[2]) % 16;

    return ($mod1 === 3 && $mod2 === 7 && $mod3 === 5);
}


/*

num1 = 18
mod1 = 18 % 13 = 5
num1 = num1 - (mod1-3);

num1 = 15
mod1 = 15 % 13 = 2
num1 = num1 - (mod1-3);

*/