<?php
declare(strict_types=1);
namespace Exercises\Search;
/**
 * Implement Linear and Binary search that returns $n if found otherwise null.
 * Implement Naive search that returns int repetitions of $n inside of a $string.
 *
 * @method static int|null linear(int[] $input, int $n)
 * @method static int|null binary(int[] $input, int $n)
 * @method static int naive(string $input, string $n)
 */
final class Search
{
	public static function linear(array $input, int $n) {
        if (count($input) == 0) {
            return null;
        }

        foreach ($input as $key => $value) {
            if ($value === $n) {
                return $key;
            }
        }

        return null;
    }

    public static function binary(array $input, int $n) {
        if (count($input) === 0) {
            return null;
        }

        $start = 0;
        $end = count($input) - 1;
        $mid = (int)(($start + $end)/2);

        while ($input[$mid] !== $n && $start <= $end) {
            if ($n < $input[$mid]) {
                $end = $mid - 1;
            } else {
                $start = $mid + 1;
            }

            $mid = (int)(($start + $end)/2);
        }
        return $input[$mid] === $n ? $mid : null;
    }
}

echo Search::linear([2,3,4,5,6], 5);
echo "\n";
echo Search::linear([2,3,4,5,6], 5);
echo "\n";
echo Search::linear([2,3,4,5,6], 7);
echo "\n";