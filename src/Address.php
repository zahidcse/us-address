<?php
namespace Zahidcse\Usaddress;
class Address
{
       public static function validateUsStreet($str) {

        //$str = "345 Park Avenue New York, NY 10019";
        $addressarray = explode(',', $str);
        $listcode = array();
        $statepassed = 0;
        $zippassed = 0;
        $validatiopassed = 0;
        $streetpassed = 0;
        if (count($addressarray) >= 2) {
            foreach ($addressarray as $add) {
                $addresscode = explode(' ', $add);
                foreach ($addresscode as $code) {
                    $listcode[] = $code;
                }
            }
        }

        foreach ($listcode as $lad) {
            preg_match("/^(?:(A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY]))$/", strtoupper($lad), $matches);
            if (count($matches) && strlen($lad)<3) {
                $statepassed = 1;
            }
            preg_match("/^(?!0{5})(\d{5})(?!-?0{4})(-?\d{4})?$/", $lad, $matches);
            if (count($matches)) {
                $zippassed = 1;
            }

            preg_match("/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/", $lad, $matches);
            if (count($matches)) {
                $validatiopassed++;
            }
            if (is_numeric($lad)) {
                $streetpassed++;
            }
        }



        if ($validatiopassed >= 2 && $statepassed && $streetpassed >= 1 && $zippassed) {
            return true;
        } else {
            return false;
        }
    }
} 
?>
