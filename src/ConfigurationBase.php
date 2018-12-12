<?php

namespace Lwwcas\NumbersToWords;

abstract class ConfigurationBase
{
    /**
     * Locale name
     *
     * @var string
     * @access public
     */
    var $locale = null;

    /**
     * Language name in English
     *
     * @var string
     * @access public
     */
    var $lang = null;

    /**
     * Native language name
     *
     * @var string
     * @access public
     */
    var $lang_native = null;

    /**
     * The word for the minus sign
     *
     * @var string
     * @access private
     */
    var $_minus = null;

    /**
     * The word separator
     *
     * @var string
     * @access private
     */
    var $_sep = null;

    /**
     * The array containing numbers 11-19.
     *
     * @var array
     * @access private
     */
    var $_contractions = [];

    /**
     * The array containing the digits (indexed by the digits themselves).
     *
     * @var array
     * @access private
     */
    var $_digits = [];

    /**
     * The array containing numbers for tens, 10,20,...,90.
     *
     * @var array
     * @access private
     */
    var $_tens  = [];

    /**
     * The array containing numbers for hundreds.
     *
     * @var array
     * @access private
     */
    var $_hundreds = [];

    /**
     * The sufixes for exponents (singular)
     *
     * @var array
     * @access private
     */
    var $_exponent = [];

    /**
     * The currency names (based on Wikipedia) and plurals
     *
     * @var array
     * @link http://pt.wikipedia.org/wiki/ISO_4217
     * @access private
     */
    var $_currency_names = [];

    /**
     * The default currency name
     *
     * @var string
     * @access public
     */
    var $def_currency = null;
}
