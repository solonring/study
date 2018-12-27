<?php

function fecta($n)
{
        if($n == 0){
                return 1;
        }else{
                return $n * fecta($n-1);
        }
}

$n = (int)$_GET['n'];
echo fecta($n);

