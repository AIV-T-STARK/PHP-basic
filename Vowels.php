<?php
declare(strict_types=1);
namespace Exercises\Vowels;
/**
 * Count string vowels (aeiou).
 *
 * @method static int count(string $string)
 * @example Vowels::count('Hello!')  === 2
 * @example Vowels::count('Why?')  === 0
 */
final class Vowels
{
	public static function count(string $string) {
		$count = 0;
		foreach (str_split($string) as $char) {
			if($char === "u" || $char === "e" || $char === "o" || $char === "a" || $char === "a") {
				$count++;
			}
		}
		return $count;
	}
}

echo Vowels::count('Hello!');