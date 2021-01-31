<?php

    function tentukan_deret_aritmatika($arr) {
        // kode di sini
        $bol = 0;
        $data = array();
        for($i=1; $i<sizeof($arr); $i++)
            $data[] = $arr[$i] - $arr[$i-1];
        
        for($i=0; $i<sizeof($data); $i++){
            for($j=1+$i; $j<sizeof($data); $j++){
                if($data[$i] != $data[$j]){
                    $bol = 1;
                    break;
                }
            }
        }

        if($bol == 0)
            return "true";
        else
            return "false";
    }

    // TEST CASES
    echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]).'<br>';// true
    echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]).'<br>';// false
    echo tentukan_deret_aritmatika([2, 4, 6, 8]).'<br>'; //true
    echo tentukan_deret_aritmatika([2, 6, 18, 54]).'<br>';// false
    echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]).'<br>';// false

?>