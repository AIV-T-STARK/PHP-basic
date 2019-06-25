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
		$swapped = false;
		for ($i = 0; $i < $n - 1; $i++) { 
			$swapped = false;

			for($j = 0; $j < $n - $i - 1; $j++) {
				if($input[$j] > $input[$j+1]) {
					$temp = $input[$j];
					$input[$j] = $input[$j+1];
					$input[$j+1] = $temp;

					$swapped = true;
				}
			}

			if(!$swapped) {
				breack;
			}
		}
		return $input;
	}

	public static function insertion(array $input) {
		$n = count($input);

		for ($i = 1; $i < $n; $i++) { 
	        $key = $input[$i];
	        for($j = $i - 1 ;$j >= 0 && $input[$j] > $key; $j-- ) {
	        	$input[$j + 1] = $input[$j];
	        }

	        $input[$j + 1] = $key; 
	    }

	    return $input;
	}

	public static function selection(array $input) {
		$n = count($input);

		for($i = 0; $i < $n ; $i++) { 
	        $min_index = $i; 
	        for($j = $i + 1; $j < $n ; $j++) { 
	            if ($input[$j] < $input[$min_index]) { 
	                $min_index = $j; 
	        	} 
	    	} 
	          
	    
	        if ($input[$i] > $input[$min_index]) { 
	            $tmp = $input[$i]; 
	            $input[$i] = $input[$min_index]; 
	            $input[$min_index] = $tmp; 
	        } 
	    } 
	    return $input;
	}

	public static function merge(array $input)
	{
		$n = count($input);

        if ($n <= 1) {
            return $input;
        }

        $middle = (int)($n/2);

        $left = array_slice($input, 0, $middle);
        $right = array_slice($input, $middle);

        $left = self::merge($left);
        $right = self::merge($right);

        return self::merger($left, $right);
	}

	private static function merger(array $left, array $right)
    {
        $results = [];

        while (count($left) && count($right)) {
            if ($left[0] < $right[0]) {
                $results[] = array_shift($left);
            } else {
                $results[] = array_shift($right);
            }
        }

        return array_merge($results, $left, $right);
    }

    public static function quick($input)
    {
        if (count($input) == 0)
            return array();
 
        $pivot_element = $input[0];
        $left_element = $right_element = array();
 
        for ($i = 1; $i < count($input); $i++) {
            if ($input[$i] < $pivot_element)
                $left_element[] = $input[$i];
            else
                $right_element[] = $input[$i];
        }
 
        return array_merge(self::quick($left_element), array($pivot_element), self::quick($right_element));
    }
    
}

var_dump(Sort::bubble([1,5,3,9,6,2]));
var_dump(Sort::insertion([1,5,3,9,6,2]));
var_dump(Sort::selection([1,5,3,9,6,2]));
var_dump(Sort::merge([1,5,3,9,6,2]));
var_dump(Sort::quick([1,5,3,9,6,2]));