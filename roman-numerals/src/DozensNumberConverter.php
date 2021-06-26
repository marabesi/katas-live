<?php


namespace Kata;


class DozensNumberConverter implements Convertable
{
    use UnitConverter;

    public function toRoman(int $amount)
    {
        $romanNumeral = '';
        $modDozens = $amount % 10;
        $divDozens = $amount / 10;
        if ( $divDozens > 0 ) {
            $romanNumeral .= $this->unitConverter($amount,'X','L','C',10);
        }
        if ( $modDozens > 0 ){
            $romanNumeral .= $this->unitConverter($modDozens,'I','V','X');
        }
        return $romanNumeral;
    }
}
