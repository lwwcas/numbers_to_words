<?php

namespace Lwwcas\NumbersToWords\locale;

use Lwwcas\NumbersToWords\ConfigurationBase;

class pt extends ConfigurationBase
{
    /**
     * Locale name
     *
     * @var string
     * @access public
     */
    var $locale = 'pt';

    /**
     * Language name in English
     *
     * @var string
     * @access public
     */
    var $lang = 'Portuguese';

    /**
     * Native language name
     *
     * @var string
     * @access public
     */
    var $lang_native = 'Português';

    /**
     * The word for the minus sign
     *
     * @var string
     * @access private
     */
    var $_minus = 'negativo';

    /**
     * The word separator
     *
     * @var string
     * @access private
     */
    var $_sep = ' e ';

    /**
     * The array containing numbers 11-19.
     *
     * @var array
     * @access private
     */
    var $_contractions = [
        '',
        'onze',
        'doze',
        'treze',
        'quatorze',
        'quinze',
        'dezesseis',
        'dezesete',
        'dezoito',
        'dezenove'
    ];

    /**
     * The array containing the digits (indexed by the digits themselves).
     *
     * @var array
     * @access private
     */
    var $_digits = [
        'zero',
        'um',
        'dois',
        'três',
        'quatro',
        'cinco',
        'seis',
        'sete',
        'oito',
        'nove'
    ];

    /**
     * The array containing numbers for tens, 10,20,...,90.
     *
     * @var array
     * @access private
     */
    var $_tens  = [
        '',  // 0: not displayed
        'dez',
        'vinte',
        'trinta',
        'quarenta',
        'cinquenta',
        'sessenta',
        'setenta',
        'oitenta',
        'noventa'
    ];

    /**
     * The array containing numbers for hundreds.
     *
     * @var array
     * @access private
     */
    var $_hundreds = [
        '',  // 0: not displayed
        'cem',
        'duzentos',
        'trezentos',
        'quatrocentos',
        'quinhentos',
        'seiscentos',
        'setecentos',
        'oitocentos',
        'novecentos'
    ];

    /**
     * The sufixes for exponents (singular)
     *
     * @var array
     * @access private
     */
    var $_exponent = [
        '', // 0: not displayed
        'mil',
        'milhão',
        'bilhão',
        'trilhão',
        'quatrilhão',
        'quintilhão',
        'sextilhão',
        'septilhão',
        'octilhão',
        'nonilhão',
        'decilhão',
        'undecilhão',
        'dodecilhão',
        'tredecilhão',
        'quatuordecilhão',
        'quindecilhão',
        'sedecilhão',
        'septendecilhão'
    ];

    /**
     * The currency names (based on Wikipedia) and plurals
     *
     * @var array
     * @link http://pt.wikipedia.org/wiki/ISO_4217
     * @access private
     */
    var $_currency_names = array(
        'BRL' => array(array('real', 'reais'), array('centavo', 'centavos')),
        'USD' => array(array('dólar', 'dólares'), array('cêntimo', 'cêntimos')),
        'EUR' => array(array('euro', 'euros'), array('cêntimo', 'cêntimos')),
    );

    /**
     * The default currency name
     *
     * @var string
     * @access public
     */
    var $def_currency = 'EUR';

}
