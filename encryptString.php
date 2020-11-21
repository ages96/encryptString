<?php
// example code

$str_or = "TELEGRAM";
$str = str_split($str_or);
$k=0;
$tenses = "";

if (count($str)>0){
    $tenses .= $str[0]; 
    foreach($str as $key => $v){
        $k += 3;
        if ($k>strlen($str_or)){
            $k = 0;
            $cek = str_split($tenses);
            if ($cek[$k]==$str[$k]){
                $k+=2;
            }
        }
        $tenses .= $str[$k];
    }
}

echo "Original Text : ".$str_or."\n";
echo "Encrypted Text : ".$tenses;