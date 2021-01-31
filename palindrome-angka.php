<?php

    function palindrome_angka($angka) {
    // tulis kode di sini
        while(true){
            $angka++;
            if($angka < 10)
                return $angka;

            $bol = 0;
            $strNum = strval($angka);
            for($i=0, $j=strlen($strNum)-1; $i<strlen($strNum), $j>=0; $i++, $j--){
                if($strNum[$i] != $strNum[$j]){
                    $bol = 1;
                    break;
                }
            }
            
            if($bol == 0)
                return $angka;
        }
    }

    // TEST CASES
    echo palindrome_angka(8).'<br>'; // 9
    echo palindrome_angka(10).'<br>'; // 11
    echo palindrome_angka(117).'<br>'; // 121
    echo palindrome_angka(175).'<br>'; // 181
    echo palindrome_angka(1000).'<br>'; // 1001

?>