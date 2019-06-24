<?php
declare(strict_types=1);
namespace Exercises\Pyramid;
/**
 * Print a pyramid.
 *
 * @method static void print(int $rows)
 * @example Pyramid::print(3)  ->   #  
 *                                 ### 
 *                                #####
 */
final class Pyramid
{
	public static function print(int $rows)
	{
		$strPyramid = "";
		for($i = 1; $i <= $rows; $i++){
		    for($j = 1; $j <= $rows - $i; $j++){
		        $strPyramid .= " ";
		    }

		    for($k = 1; $k <= 2*$i-1; $k++){
				$strPyramid .= "#";
		    }

			$strPyramid .= "\n";
		}

		return $strPyramid;
	}
}

echo Pyramid::print(5);