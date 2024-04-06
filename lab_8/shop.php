<?php
    $arr = [];
    $arrA = [];
    $arrKey = ["title", "description", "price"];
    mt_srand((float)(microtime()*1000000));
    for ($i=0; $i<$n; $i++){
        for($j=0; $j<count($arrKey); $j++){
            $random = 0 + 30 * mt_rand() / mt_getrandmax();
            $arr[] = (int)$random;
        }
        $arrB = array_combine($arrKey, $arr);
        $arrA[$i] = $arrB;
        $arr = array();
    }
?>