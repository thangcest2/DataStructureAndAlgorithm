<?php

namespace Utilities;

class Text
{
    public static function deCamelize($word, $separator = '_' , $callback = 'lcfirst') {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $word, $matches);
        foreach ($matches[0] as &$match) {
            $match = $callback($match);
        }
        return implode($matches[0], $separator);
    }


    public static function camelize($word, $separator = '_' ,$callback = 'ucfirst') {
        $words = explode($separator, $word);
        $out = "";
        foreach ($words as $w) {
            $out .= $callback($w);
        }
        return $out;
    }

}
