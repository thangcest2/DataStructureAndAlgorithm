<?php

namespace Utilities;

class BashColorsString
{
    const BLACK = 'black';
    const RED = 'red';
    const GREEN = 'green';
    const YELLOW = 'yellow';
    const BLUE = 'blue';
    const MAGENTA = 'magenta';
    const CYAN = 'cyan';
    const LIGHT_GRAY = 'light_gray';
    const WHITE = 'white';
    const BROWN = 'brown';
    const LIGHT_RED = 'light_red';
    const PURPLE = 'purple';
    const LIGHT_BLUE = 'light_blue';
    const LIGHT_PURPLE = 'light_purple';
    const LIGHT_GREEN = 'light_green';
    const LIGHT_CYAN = 'light_cyan';
    const DARK_GRAY = 'dark_gray';

    private static $foregroundColors = array(
        self::BLACK        => '0;30',
        self::DARK_GRAY    => '1;30',
        self::BLUE         => '0;34',
        self::LIGHT_BLUE   => '1;34',
        self::GREEN        => '0;32',
        self::LIGHT_GREEN  => '1;32',
        self::CYAN         => '0;36',
        self::LIGHT_CYAN   => '1;36',
        self::RED          => '0;31',
        self::LIGHT_RED    => '1;31',
        self::PURPLE       => '0;35',
        self::LIGHT_PURPLE => '1;35',
        self::BROWN        => '0;33',
        self::YELLOW       => '1;33',
        self::LIGHT_GRAY   => '0;37',
        self::WHITE        => '1;37',
    );

    private static $backgroundColors = array(
        self::BLACK      => '40',
        self::RED        => '41',
        self::GREEN      => '42',
        self::YELLOW     => '43',
        self::BLUE       => '44',
        self::MAGENTA    => '45',
        self::CYAN       => '46',
        self::LIGHT_GRAY => '47',
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
        } else {
            return $string;
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