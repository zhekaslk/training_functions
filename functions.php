<?php
function checkStringEntry($str1,  $str2) {   
    $aaa = str_split($str1);
    $bbb = str_split($str2);
    $result = false;
    for ($j = 0; $j < count($bbb)-count($aaa)+1; $j++) {
        $k = $j;
        $schet = 0;
        for ($i = 0; $i < count($aaa); $i++) {
            if ($aaa[$i] == $bbb[$k]) {
                $k++;
                $schet++;
            }
        }
        if ($schet == count($aaa)) {
            $result = true;
        }
    }
 return var_dump($result);
}
echo checkStringEntry("13", "12");
