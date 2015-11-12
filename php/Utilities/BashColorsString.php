<?php

namespace Utilities;

class BashColorsString
{
    private static $foregroundColors = array(
        'black'        => '0;30',
        'dark_gray'    => '1;30',
        'blue'         => '0;34',
        'light_blue'   => '1;34',
        'green'        => '0;32',
        'light_green'  => '1;32',
        'cyan'         => '0;36',
        'light_cyan'   => '1;36',
        'red'          => '0;31',
        'light_red'    => '1;31',
        'purple'       => '0;35',
        'light_purple' => '1;35',
        'brown'        => '0;33',
        'yellow'       => '1;33',
        'light_gray'   => '0;37',
        'white'        => '1;37',
    );

    private static $backgroundColors = array(
        'black'      => '40',
        'red'        => '41',
        'green'      => '42',
        'yellow'     => '43',
        'blue'       => '44',
        'magenta'    => '45',
        'cyan'       => '46',
        'light_gray' => '47',
    );

    public static function make($string, $foregroundColor = null, $background_color = null)
    {
        $coloredString = "";
        if (isset(self::$foregroundColors[$foregroundColor])) {
            $coloredString .= "\033[" . self::$foregroundColors[$foregroundColor] . "m";
        }
        if (isset(self::$backgroundColors[$background_color])) {
            $coloredString .= "\033[" . self::$backgroundColors[$background_color] . "m";
        }
        
        if ($coloredString) {
            $coloredString .= $string . "\033[0m";
        }

        return $coloredString;
    }

    public static function foregroundColors()
    {
        var_dump(self::$foregroundColors);
    }

    public static function backgroundColors()
    {
        var_dump(self::$backgroundColors);
    }


}