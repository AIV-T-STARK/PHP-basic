<?php
declare(strict_types=1);
namespace Exercises\Numbers;
/**
 * @method static int add(int $n) add numbers from 1 up to $n including.
 * @example Numbers::add(3) === 6
 */
final class Numbers
{
	public static function add($n)
	{
		$sum = 0;
		for($i = 1; $i <= $n; $i++) {
			$sum += $i;
		}
		return $sum;
	}
}

echo Numbers::add(3) . "\n";
echo Numbers::add(4) . "\n";
echo Numbers::add(10) . "\n";