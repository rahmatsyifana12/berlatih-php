<?php

    function papan_catur($angka) {

        for($i=1; $i<=$angka; $i++){
            if($i % 2 == 1){
                for($j=1; $j<=$angka; $j++)
                    if($j < $angka)
                        echo "#&nbsp;";
                    else
                        echo "#";
            }
            else{
                for($j=1; $j<=$angka-1; $j++)
                    echo "&nbsp;#";
            }
            echo '<br>';
        }
    }

    // TEST CASES
    echo papan_catur(4).'<br>';
    /*
    # # # #
     # # #
    # # # #
     # # #
    */

    echo papan_catur(8).'<br>';
    /*
    # # # # # # # #
     # # # # # # #
    # # # # # # # #
     # # # # # # #
    # # # # # # # #
     # # # # # # #
    # # # # # # # #
     # # # # # # #
    */
    echo papan_catur(5).'<br>';
    /*
    # # # # #
     # # # #
    # # # # #
     # # # #
    # # # # #
    */

?>