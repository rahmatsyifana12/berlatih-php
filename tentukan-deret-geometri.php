<?php

    function tentukan_deret_geometri($arr) {
        // kode di sini
        $bol = 0;
        $len = sizeof($arr);
        for($i=1; $i<$len; $i++){
            $temp = $arr[$i]/$arr[$i-1];
            if($i == 1)
                $beda = $temp;
            else{
                if($temp != $beda){
                    $bol = 1;
                    break;
                }
                $beda = $temp;
            }
        }

        if($bol == 0)
            return "true";
        else
            return "false";
    }

    //TEST CASES
    echo tentukan_deret_geometri([1, 3, 9, 27, 81]).'<br>'; // true
    echo tentukan_deret_geometri([2, 4, 8, 16, 32]).'<br>'; // true

    echo tentukan_deret_geometri([2, 4, 6, 8]).'<br>'; // false
    echo tentukan_deret_geometri([2, 6, 18, 54]).'<br>'; // true
    echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]).'<br>'; //false

?>