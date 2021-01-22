<?php
/**
 * The $minute variable contains a number from 0 to 59 (i.e. 10 or 25 or 60 etc).
 * Determine in which quarter of an hour the number falls.
 * Return one of the values: "first", "second", "third" and "fourth".
 * Throw InvalidArgumentException if $minute is negative of greater then 60.
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param int $minute
 * @return string
 * @throws InvalidArgumentException
 */
function getMinuteQuarter(int $minute)
{
    if (!is_int($minute) || $minute < 0 || $minute >= 60) {
        throw new InvalidArgumentException(
            "getMinuteQuarter function only accepts not negative integers and less than sixty.
             Input was: " . $minute);
    } else if ($minute > 0 && $minute <= 15) return "first";
    else if ($minute > 15 && $minute <= 30) return "second";
    else if ($minute > 30 && $minute <= 45) return "third";
    else return "fourth";
}

/**
 * The $year variable contains a year (i.e. 1995 or 2020 etc).
 * Return true if the year is Leap or false otherwise.
 * Throw InvalidArgumentException if $year is lower then 1900.
 * @see https://en.wikipedia.org/wiki/Leap_year
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param int $year
 * @return boolean
 * @throws InvalidArgumentException
 */
function isLeapYear(int $year)
{
    if (!is_int($year) || $year < 1900) {
        throw new InvalidArgumentException(
            "isLeapYear function only accepts integers and less than 1900.
             Input was: " . $year);
    } else return (!($year % 4) && ($year % 100 || !($year % 400)));
}

/**
 * The $input variable contains a string of six digits (like '123456' or '385934').
 * Return true if the sum of the first three digits is equal with the sum of last three ones
 * (i.e. in first case 1+2+3 not equal with 4+5+6 - need to return false).
 * Throw InvalidArgumentException if $input contains more then 6 digits.
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param string $input
 * @return boolean
 * @throws InvalidArgumentException
 */
function isSumEqual(string $input)
{
    $sum1 = 0;
    $sum2 = 0;
    if (!is_string($input) || !(strlen($input) == 6)) {
        throw new InvalidArgumentException(
            "isSumEqual function only accepts a string of six digits.
             Input was: " . $input);
    } else {
        for ($i = 0; $i < 6; $i++) {
            if ($i < 3) {
                $sum1 += (int)$input[$i];
            } else $sum2 += (int)$input[$i];
        }
        return !((bool)($sum1 - $sum2));
    }
}