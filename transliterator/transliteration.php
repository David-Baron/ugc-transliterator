<?php 

require 'php-translit/Translit.php';

if ($_GET['cyrillic-string']) {
    echo tranliterate($_GET['cyrillic-string']);
    exit;
}

/**
 * @param string cyrillicString The string to tranliterate in cyrilic
 * @return string The string in latin
 */
function tranliterate($cyrillicString)
{
    //return transliterator_transliterate('Russian-Latin/BGN', $cyrillicString); 
    return Translit::object()->convert($cyrillicString, 'uk,latin');
}