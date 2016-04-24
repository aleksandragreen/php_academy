<?php
/**
 * Created by PhpStorm.
 * User: olexa
 * Date: 24.04.2016
 * Time: 22:34
 */

//$x = rand(1,9999999);
$x =(false && true || false && true || !false && true);
echo 'Value = ';
    echo var_dump($x);
echo '<br>';
$x = rand(1,9999999);


echo ($x xor 2) ;


