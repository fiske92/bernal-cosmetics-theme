<?php

namespace VanjaBeautyTheme\Helpers;

class SrbLatin
{
    public $replace = array(
	"Б" => "B",
	"Б" => "V",
	"Г" => "G",
	"Д" => "D",
	"Ђ" => "Đ",
	"Е" => "E",
	"Ж" => "Ž",
	"З" => "Z",
	"И" => "I",
	"Ј" => "J",
	"К" => "K",
	"Л" => "L",
	"Љ" => "Lj",
	"М" => "M",
	"Н" => "N",
	"Њ" => "Nj",
	"О" => "O",
	"П" => "P",
	"Р" => "R",
	"С" => "S",
	"Т" => "T",
	"Ћ" => "Ć",
	"У" => "U",
	"Ф" => "F",
	"Х" => "H",
	"Ц" => "C",
	"Ч" => "Č",
	"Џ" => "Dž",
	"Ш" => "Š",
	"а" => "a",
	"б" => "b",
	"в" => "v",
	"г" => "g",
	"д" => "d",
	"ђ" => "đ",
	"е" => "e",
	"ж" => "ž",
	"з" => "z",
	"и" => "i",
	"ј" => "j",
	"к" => "k",
	"л" => "l",
	"љ" => "lj",
	"м" => "m",
	"н" => "n",
	"њ" => "nj",
	"о" => "o",
	"п" => "p",
	"р" => "r",
	"с" => "s",
	"т" => "t",
	"ћ" => "ć",
	"у" => "u",
	"ф" => "f",
	"х" => "h",
	"ц" => "c",
	"ч" => "č",
	"џ" => "dž",
	"ш" => "š",
    );

    public function __construct()
    {
        add_filter('gettext', array(&$this, 'convert_script'), 9);
        add_filter('ngettext', array(&$this, 'convert_script'), 9);
    }

    public function convert_script($text)
    {
	    return strtr($text, $this->replace);
    }
}

?>