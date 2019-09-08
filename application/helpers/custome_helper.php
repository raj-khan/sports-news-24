<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('showcharacter')) {

    // function for character shortend. 
    function showcharacter($string, $limit) {

        if (strlen($string) > $limit) {

            $pos = strpos($string, ' ', $limit);
            return substr($string, 0, $pos) . '...';
        } else {

            return $string;
        }
    }

}

if (!function_exists('seoUrl')) {

    function seoUrl($string) {
        //Clean up other character
//        $string = preg_replace("/[?.!(),*><~+-{}:|;%^=@#$&`']/", "", $string);
//        //Clean up multiple dashes or whitespaces
//        $string = preg_replace("/[\s-]+/", " ", $string);
//        //Convert whitespaces and underscore to dash
//        $string = preg_replace("/[\s_]/", "-", $string);
        $string = str_replace(" ", "-", strtolower($string));

        return $string;
    }

}
?>