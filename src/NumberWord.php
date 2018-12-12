<?php

namespace Lwwcas\NumbersToWords;

use Lwwcas\NumbersToWords\locale\pt;

class NumberWord
{
    private $use = 'Lwwcas\NumbersToWords\locale\\';

    public function index(){
        $local = 'pt';
        $exmp = new pt();
        dd($exmp->locale);
    }

}
