<?php

    function tukar_besar_kecil($string){
        //kode di sini
        $len = strlen($string);
        for($i=0; $i<$len; $i++){
            $temp = ord($string[$i]);
            
            if($temp >= 65 && $temp <= 90){
                $temp += 32;
                $string[$i] = chr($temp);
            }
            else if($temp >= 97 && $temp <= 122){
                $temp -= 32;
                $string[$i] = chr($temp);
            }
        }
        
        return $string;
    }

    // TEST CASES
    echo tukar_besar_kecil('Hello World').'<br>'; // "hELLO wORLD"
    echo tukar_besar_kecil('I aM aLAY').'<br>'; // "i Am Alay"
    echo tukar_besar_kecil('My Name is Bond!!').'<br>'; // "mY nAME IS bOND!!"
    echo tukar_besar_kecil('IT sHOULD bE me').'<br>'; // "it Should Be ME"
    echo tukar_besar_kecil('001-A-3-5TrdYW').'<br>'; // "001-a-3-5tRDyw"

?>