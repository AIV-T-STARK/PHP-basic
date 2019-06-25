<?php
declare(strict_types=1);
namespace Exercises\Stack;
/**
 * Create a Stack.
 *
 * When stack is empty pop and peek methods should return null.
 *
 * @method void push(mixed $value)
 * @method mixed|null pop()
 * @method mixed|null peek()
 */

final class Stack
{
	private $stack = [];

	public function add($value)
	{
		array_unshift($this->stack, $value);
	}

	public function remove()
	{
		return array_pop($this->stack);
	}

	public function peek()
	{
		if (count($this->stack) > 0) {
			return $this->stack[0];
		} else {
			return null;
		}
		
	}
}