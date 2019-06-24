<?php
declare(strict_types=1);
namespace Exercises\Sort;
/**
 * Implement sorting algorithms.
 *
 * @method static array bubble(array $input) Bubble Sort
 * @method static array selection(array $input) Selection Sort
 * @method static array insertion(array $input) Insertion Sort
 * @method static array merge(array $input) Merge Sort
 * @method static array quick(array $input) Quick Sort
 * @method static array radix(array $input) Radix Sort
 */
final class Sort
{
	public static function bubble(array $input)
	{
		$n = count($input);
		if ($n <= 0) {
			return $input;
		}
		for ($i = 0; $i < $n - 1; $i++) { 	
			for($j = 0; $j < $n - $i - 1; $j++) {
				if($input[$j] > $input[$j+1]) {
					$temp = $input[$j];
					$input[$j] = $input[$j+1];
					$input[$j+1] = $temp;
				}
			}
		}
		return $input;
	}
}

var_dump(Sort::bubble([1,5,3,9,6,2]));