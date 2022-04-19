<?php

class SpeSkillTest 
{
    public static function narcissistic($num)
    {
        $countDigit = strlen($num);
        $arrNum = str_split($num);
        $result = 0;

        foreach ($arrNum as $key => $value) {
            $result += pow($value, $countDigit);
        }

        if ((int) $num == (int) $result) {
            return true;
        }
        else {
            return false;
        }

    }

    public static function parityoutliter($arr)
    {
        $num = 0;
        $message = "";

        foreach ($arr as $key => $value) {
            if ($value % 2 == 0) {
                $num = $value;
                $message = "all even integer, no outlier";
            } elseif ($value % 2 != 0) {
                $num = $value;
                $message = "all odd integer, no outlier";
            }
            
        }

    }

    public static function findNeedle($arr, $search)
    {
        $result = "";
        foreach ($arr as $key => $value) {
            if ($value == $search) {
                return $key;
            }
        }
    }

    public static function blueOcean($arr, $search)
    {
        foreach ($arr as $key => $value) {
            if ($value == $search[$key]) {
                unset($arr[$key]);
            }
        }

        return $arr;
    }



    
}