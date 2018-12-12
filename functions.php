<?php
function checkStringEntry($substr,  $string) {
    $arr_substr = str_split($substr);
    $arr_str = str_split($string);
    $result = false;
    $poss_occ = count($arr_str)-count($arr_substr)+1; /// число возможных вхождений подстроки в строку
    for ($j = 0; $j < $poss_occ; $j++) {
        $k = $j;
        for ($i = 0; $i < count($arr_substr); $i++) {
            if ($arr_substr[$i] == $arr_str[$k]) {
                $k++;
            }
            else {
                break;
            }
        }
        if ($i == count($arr_substr)) {
            $result = true;
            break;
        }
    }
 return var_dump($result);
}
echo checkStringEntry("12", "123");
