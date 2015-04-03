<?php

namespace Classes\NumerosRomanos;


class NumerosRomanos {

    public function converteNumeroInteiroParaRomano($numeroInteiro)
    {
        if(!is_int($numeroInteiro)){
            throw new \InvalidArgumentException('São permitidos somente valores numéricos');
        }

        $y = "";

        while ($numeroInteiro/1000 >= 1) {
            $y .= "M";
            $numeroInteiro = $numeroInteiro-1000;
        }

        if ($numeroInteiro/900 >= 1) {
            $y .= "CM";
            $numeroInteiro=$numeroInteiro-900;
        }

        if ($numeroInteiro/500 >= 1) {
            $y .= "D";
            $numeroInteiro=$numeroInteiro-500;
        }

        if ($numeroInteiro/400 >= 1) {
            $y .= "CD";
            $numeroInteiro=$numeroInteiro-400;
        }

        while ($numeroInteiro/100 >= 1) {
            $y .= "C";
            $numeroInteiro = $numeroInteiro-100;
        }

        if ($numeroInteiro/90 >= 1) {
            $y .= "XC";
            $numeroInteiro=$numeroInteiro-90;
        }

        if ($numeroInteiro/50 >= 1) {
            $y .= "L";
            $numeroInteiro=$numeroInteiro-50;
        }

        if ($numeroInteiro/40 >= 1) {
            $y .= "XL";
            $numeroInteiro=$numeroInteiro-40;
        }

        while ($numeroInteiro/10 >= 1) {
            $y .= "X";
            $numeroInteiro = $numeroInteiro-10;
        }

        if ($numeroInteiro/9 >= 1) {
            $y .= "IX";
            $numeroInteiro=$numeroInteiro-9;
        }

        if ($numeroInteiro/5 >= 1) {
            $y .= "V";
            $numeroInteiro=$numeroInteiro-5;
        }

        if ($numeroInteiro/4 >= 1) {
            $y .= "IV";
            $numeroInteiro=$numeroInteiro-4;
        }

        while ($numeroInteiro >= 1) {
            $y .= "I";
            $numeroInteiro = $numeroInteiro-1;
        }

        return $y; 
    }


    public function converteNumeroRomanoParaInteiro($numeroRomano)
    {
        if(!is_string($numeroRomano)){
            throw new \InvalidArgumentException('São permitidos somente letras');
        }

        $numerosRomanos = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        );

        $result = 0;

        foreach ($numerosRomanos as $key => $value) {
            while (strpos($numeroRomano, $key) === 0) {
                $result += $value;
                $numeroRomano = substr($numeroRomano, strlen($key));
            }
        }

        return $result;
    }

} 