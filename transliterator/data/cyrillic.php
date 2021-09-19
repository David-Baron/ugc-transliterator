<?php

/**
 * Cyrillic transliteration class, based on ISO 9:1995
 *
 * The following combined table shows characters for various Slavic, Iranian,
 * Romance, Turkic, Uralic, Mongolic, Caucasian, Tungusic, Paleosiberian and
 * other languages of the former USSR which are written in Cyrillic.
 *
 * This table does not count language-dependent transliterations for Russian,
 * Ukrainian, Belarusian and Bulgarian, use custom codes instead.
 *
 * @author Alexey Shtokalo <alexey@shtokalo.net>
 */

return array (
    // upper case
    'А' => 'A',     'Ӓ' => 'A',     'Ӑ' => 'A',     'Ӕ' => 'AE',
    'Б' => 'B',     'В' => 'V',     'Г' => 'G',     'Ѓ' => 'Ǵ',
    'Ғ' => 'Ġ',     'Ҕ' => 'Ğ',     'Һ' => 'Ḥ',     'Д' => 'D',
    'Ђ' => 'Đ',     'Е' => 'E',     'Ӗ' => 'Ĕ',     'Ё' => 'Ë',
    'Є' => 'Ê',     'Ж' => 'Ž',     'Җ' => 'Ž',     'Ӝ' => 'Z',
    'Ӂ' => 'Z',     'З' => 'Z',     'Ӟ' => 'Z',     'Ӡ' => 'Ź',
    'Ѕ' => 'Ẑ',     'И' => 'I',     'Ӣ' => 'Ī',     'Ӥ' => 'Î',
    'Й' => 'J',     'І' => 'Ì',     'Ї' => 'Ï',     'Ј' => 'J',
    'К' => 'K',     'Ќ' => 'Ḱ',     'Ӄ' => 'Ḳ',     'Ҝ' => 'K',
    'Ҡ' => 'Ǩ',     'Ҟ' => 'K',     'Қ' => 'Ķ',     'Ԛ' => 'Q',
    'Л' => 'L',     'Љ' => 'L',     'Ԡ' => 'Ļ',     'М' => 'M',
    'Н' => 'N',     'Њ' => 'N',     'Ң' => 'Ņ',     'Ӊ' => 'Ṇ',
    'Ҥ' => 'Ṅ',     'Ԋ' => 'Ǹ',     'Ԣ' => 'Ń',     'Ӈ' => 'Ň',
    'О' => 'O',     'Ӧ' => 'Ö',     'Ө' => 'Ô',     'Ӫ' => 'Ő',
    'Ҩ' => 'Ò',     'Œ' => 'Œ',     'П' => 'P',     'Ҧ' => 'Ṕ',
    'Ԥ' => 'P',     'Р' => 'R',     'С' => 'S',     'Ҫ' => 'Ş',
    'Т' => 'T',     'Ћ' => 'Ć',     'Ԏ' => 'T',     'Ҭ' => 'Ţ',
    'У' => 'U',     'Ӱ' => 'Ü',     'Ӯ' => 'Ū',     'Ў' => 'Ŭ',
    'Ӳ' => 'Ű',     'Ү' => 'Ù',     'Ұ' => 'U',     'Ӏ' => '‡',
    'Ԝ' => 'W',     'Ф' => 'F',     'Х' => 'H',     'Ҳ' => 'Ḩ',
    'Ц' => 'C',     'Ҵ' => 'C',     'Џ' => 'D',     'Ч' => 'Č',
    'Ҷ' => 'Ç',     'Ӌ' => 'C',     'Ӵ' => 'C',     'Ҹ' => 'Ĉ',
    'Ҽ' => 'C',     'Ҿ' => 'Ç',     'Ш' => 'Š',     'Щ' => 'Ŝ',
    'Ъ' => 'ʺ',     'Ы' => 'Y',     'Ӹ' => 'Ÿ',     'Ь' => 'ʹ',
    'Э' => 'È',     'Ә' => 'A',     'Ӛ' => 'À',     'Ю' => 'Û',
    'Я' => 'Â',     'Ґ' => 'G',     'Ѣ' => 'Ě',     'Ѫ' => 'Ǎ',
    'Ѳ' => 'F',     'Ѵ' => 'Ỳ',
    // lower case
    'а' => 'a',     'ӓ' => 'a',     'ӑ' => 'a',     'ӕ' => 'ae',
    'б' => 'b',     'в' => 'v',     'г' => 'g',     'ѓ' => 'ǵ',
    'ғ' => 'ġ',     'ҕ' => 'ğ',     'һ' => 'ḥ',     'д' => 'd',
    'ђ' => 'đ',     'е' => 'e',     'ӗ' => 'ĕ',     'ё' => 'ë',
    'є' => 'ê',     'ж' => 'ž',     'җ' => 'ž',     'ӝ' => 'z',
    'ӂ' => 'z',     'з' => 'z',     'ӟ' => 'z',     'ӡ' => 'ź',
    'ѕ' => 'ẑ',     'и' => 'i',     'ӣ' => 'ī',     'ӥ' => 'î',
    'й' => 'j',     'і' => 'ì',     'ї' => 'ï',     'ј' => 'j',
    'к' => 'k',     'ќ' => 'ḱ',     'ӄ' => 'ḳ',     'ҝ' => 'k',
    'ҡ' => 'ǩ',     'ҟ' => 'k',     'қ' => 'ķ',     'ԛ' => 'q',
    'л' => 'l',     'љ' => 'l',     'ԡ' => 'ļ',     'м' => 'm',
    'н' => 'n',     'њ' => 'n',     'ң' => 'ņ',     'ӊ' => 'ṇ',
    'ҥ' => 'ṅ',     'ԋ' => 'ǹ',     'ԣ' => 'ń',     'ӈ' => 'ň',
    'о' => 'o',     'ӧ' => 'ö',     'ө' => 'ô',     'ӫ' => 'ő',
    'ҩ' => 'ò',     'œ' => 'œ',     'п' => 'p',     'ҧ' => 'ṕ',
    'ԥ' => 'p',     'р' => 'r',     'с' => 's',     'ҫ' => 'ş',
    'т' => 't',     'ћ' => 'ć',     'ԏ' => 't',     'ҭ' => 'ţ',
    'у' => 'u',     'ӱ' => 'ü',     'ӯ' => 'ū',     'ў' => 'ŭ',
    'ӳ' => 'ű',     'ү' => 'ù',     'ұ' => 'u',     'ӏ' => '‡',
    'ԝ' => 'w',     'ф' => 'f',     'х' => 'h',     'ҳ' => 'ḩ',
    'ц' => 'c',     'ҵ' => 'c',     'џ' => 'd',     'ч' => 'č',
    'ҷ' => 'ç',     'ӌ' => 'c',     'ӵ' => 'c',     'ҹ' => 'ĉ',
    'ҽ' => 'c',     'ҿ' => 'ç',     'ш' => 'š',     'щ' => 'ŝ',
    'ъ' => 'ʺ',     'ы' => 'y',     'ӹ' => 'ÿ',     'ь' => 'ʹ',
    'э' => 'è',     'ә' => 'a',     'ӛ' => 'à',     'ю' => 'û',
    'я' => 'â',     'ґ' => 'g',     'ѣ' => 'ě',     'ѫ' => 'ǎ',
    'ѳ' => 'f',     'ѵ' => 'ỳ',

    '№' => '#',
);
