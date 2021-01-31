<?php

    function ubah_huruf($string){
        //kode di sini
        $str = "";
        $len = strlen($string);
        for($i=0; $i<$len; $i++){
            $temp = chr(ord($string[$i]) + 1);
            if($temp == '{')
                $temp = 'a';
            $str[$i] = $temp;
        }

        return $str;
    }

    // TEST CASES
    echo ubah_huruf('wow').'<br>'; // xpx
    echo ubah_huruf('developer').'<br>'; // efwfmpqfs
    echo ubah_huruf('laravel').'<br>'; // mbsbwfm
    echo ubah_huruf('keren').'<br>'; // lfsfo
    echo ubah_huruf('semangat').'<br>'; // tfnbohbu

?>