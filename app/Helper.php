<?php

namespace BDNTW;

/**
 *Number to word in Bangladesh
 *
 * php library
 *
 * @author Md. Mazharul Islam<csemazharulislam@gmail.com>
 * @version 1.0
 * @license GPL-v3.0
 *
 */

final class Helper {

    public static function numToWordBn() {
        return [
            '0'  => 'জিরো',
            '1'  => 'এক',
            '2'  => 'দুই',
            '3'  => 'তিন',
            '4'  => 'চার',
            '5'  => 'পাচ',
            '6'  => 'ছয়',
            '7'  => 'সাত',
            '8'  => 'আট',
            '9'  => 'নয়',
            '10' => 'দশ',
            '11' => 'এগারো',
            '12' => 'বারো',
            '13' => 'তেরো',
            '14' => 'চৌদ্দ',
            '15' => 'পনেরো',
            '16' => 'ষোল',
            '17' => 'সতেরো',
            '18' => 'আটারো',
            '19' => 'উনিশ',
            '20' => 'বিশ',
            '30' => 'ত্রিশ',
            '40' => 'চল্লিশ',
            '50' => 'পঞ্চাশ',
            '60' => 'ষাট',
            '70' => 'সত্তর',
            '80' => 'আশি',
            '90' => 'নব্বই',
        ];
    }

    public static function numToWordEn() {
        return [
            '0'  => 'Zero',
            '1'  => 'One',
            '2'  => 'Two',
            '3'  => 'Three',
            '4'  => 'Four',
            '5'  => 'Five',
            '6'  => 'Six',
            '7'  => 'Seven',
            '8'  => 'Eight',
            '9'  => 'Nine',
            '10' => 'Ten',
            '11' => 'Eleven',
            '12' => 'Twelve',
            '13' => 'Thirteen',
            '14' => 'Fourteen',
            '15' => 'Fifteen',
            '16' => 'Sixteen',
            '17' => 'Seventeen',
            '18' => 'Eighteen',
            '19' => 'Nineteen',
            '20' => 'Twenty',
            '30' => 'Thirty',
            '40' => 'Forty',
            '50' => 'Fifty',
            '60' => 'Sixty',
            '70' => 'Seventy',
            '80' => 'Eighty',
            '90' => 'Ninety',
        ];
    }

    public static function getDivisorNumber() {
        return [
            'crore'    => 10000000,
            'lakh'     => 100000,
            'thousend' => 1000,
            'hundred'  => 100,
        ];
    }
}