<?php

    function pasangan_terbesar($angka){
        // kode di sini
        $max = "0";
        $data = array();
        $str = strval($angka);
        $len = strlen($str);
        for($i=0; $i<$len-1; $i++){
            $data[] = substr($str, $i, 2);
            if($data[$i] > $max)
                $max = $data[$i];
        }
        return $max;
    }

    // TEST CASES
    echo pasangan_terbesar(641573).'<br>'; // 73
    echo pasangan_terbesar(12783456).'<br>'; // 83
    echo pasangan_terbesar(910233).'<br>'; // 91
    echo pasangan_terbesar(71856421).'<br>'; // 85
    echo pasangan_terbesar(79918293).'<br>'; // 99
    
    
?>




