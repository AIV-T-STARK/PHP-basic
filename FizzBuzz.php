<?php
declare(strict_types=1);
namespace Exercises\FizzBuzz;
/**
 * Print numbers from 1 to n.
 * When n is divisible by 3 echo 'fizz'.
 * When n is divisible by 5 echo 'buzz.
 * When n is divisible by both 3 and 5 echo 'fizzbuzz'.
 *
 * @method static void Print(int $limit)
 * @example FizzBuzz::Print(5) -> 1 2 fizz 4 buzz
 */
final class FizzBuzz
{
	public static function Print($n)
	{
		for ($i=1; $i <= $n; $i++) { 
			if ($i % 3 == 0 && $i % 5 == 0) {
				echo 'fizzbuzz ';
			}
			elseif($i % 3 == 0) {
				echo 'fizz ';
			}
			elseif ($i % 5 == 0) {
				echo 'buzz ';
			}
			else {
				echo "$i ";
			}
			
		}
	}
}

FizzBuzz::Print(5);
FizzBuzz::Print(15);