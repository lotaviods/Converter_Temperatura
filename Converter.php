<?php

class Converter{
    public function CtoF(float $C) : float{
        $F = (9/5)*$C + 32;
        return $F;
    }
    public function FtoC(float $F): float{
        $C = ($F-32)*5/9; 
        return $C;
    }
}
//T(°C) = (T(°F) - 32) / (9/5)