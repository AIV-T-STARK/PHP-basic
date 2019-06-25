<?php
declare(strict_types=1);
namespace Exercises\Spiral;
/**
 * Create a spiral matrix of length * length.
 *
 * @method static array make(int $length)
 * @example Spiral::make(3) === [
 *     [1, 2, 3],
 *     [8, 9, 4],
 *     [7, 6, 5]]
 */
final class Spiral
{
	public static function make(int $length)
	{
		$results = [];

        $columnStart = 0;
        $columnEnd = $length - 1;
        $rowStart = 0;
        $rowEnd = $length - 1;
        $counter = 1;

        while ($columnStart <= $columnEnd && $rowStart <= $rowEnd) {
            for ($column = $columnStart; $column <= $columnEnd; ++$column) {
                $results[$rowStart][$column] = $counter;
                ++$counter;
            }
            ++$rowStart;
            for ($row = $rowStart; $row <= $rowEnd; ++$row) {
                $results[$row][$columnEnd] = $counter;
                ++$counter;
            }
            --$columnEnd;
            for ($column = $columnEnd; $column >= $columnStart; --$column) {
                $results[$rowEnd][$column] = $counter;
                ++$counter;
            }
            --$rowEnd;
            for ($row = $rowEnd; $row >= $rowStart; --$row) {
                $results[$row][$columnStart] = $counter;
                ++$counter;
            }
            ++$columnStart;
        }
        return $results;
	}
}

$arr = Spiral::make(9);

for($i = 0; $i < count($arr); $i++) {
	for ($j = 0; $j < count($arr[$i]) ; $j++) { 
		echo $arr[$i][$j] . "\t";
	}
	echo "\n";
}