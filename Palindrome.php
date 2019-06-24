<?php
declare(strict_types=1);
namespace Exercises\Palindrome;
/**
 * Palindrome is a string that equals itself when reversed.
 * Non-alpha chars must also be included.
 *
 * @method static bool check(string $string)
 * @example Palindrome::check('asddsa')  === true
 * @example Palindrome::check('asdd')  === false
 */
final class Palindrome
{
	public static function check(string $string)	
	{
		return strrev($string) === $string ? true : false;
			
	}
}

echo Palindrome::check('asddsa') ? "true" : "false";
echo "\n";
echo Palindrome::check('asgg') ? "true" : "false";
echo "\n";
echo Palindrome::check('ggrrgg') ? "true" : "false";
echo "\n";

