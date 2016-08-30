<?php
namespace ItsyBitsySataStructures;
/**
 * To demonstrate the raw interaction between memory and a data structure we're
 * going to first implement a list.
 *
 * A list is a representation of an ordered sequence of values where the same
 * value may appear many times.
 */
class ItsyList
{


    /**
     * We start with an empty block of memory which we are going to represent
     * with a normal JavaScript array and we'll store the length of the list.
     *
     * Note that we want to store the length separately because in real life the
     * "memory" doesn't have a length you can read from.
     */
    private $memory = [];
    private $length = 0;

    /**
     * First we need a way to retrieve data from our list.
     *
     * With a plain list, you have very fast memory access because you keep track
     * of the address directly.
     *
     * List access is constant O(1) - "AWESOME!!"
     */

    public function get($address)
    {
        if (!isset($this->memory[$address])) {
            throw new \Exception('Item not found at position ' . $address);
        }
        return $this->memory[$address];
    }

    /**
     * Because lists have an order you can insert stuff at the start, middle,
     * or end of them.
     *
     * For our implementation we're going to focus on adding and removing values
     * at the start or end of our list with these four methods:
     *
     *   - Push    - Add value to the end
     *   - Pop     - Remove value from the end
     *   - Unshift - Add value to the start
     *   - Shift   - Remove value from the start
     */

    /*
     * Starting with "push" we need a way to add items to the end of the list.
     *
     * It is as simple as adding a value in the address after the end of our
     * list. Because we store the length this is easy to calculate. We just add
     * the value and increment our length.
     *
     * Pushing an item to the end of a list is constant O(1) - "AWESOME!!"
     */

    public function push($value)
    {
        $this->memory[$this->length] = $value;
        $this->length++;
    }

    /**
     * Next we need a way to "pop" items off of the end of our list.
     *
     * Similar to push all we need to do is remove the value at the address at
     * the end of our list. Then just decrement length.
     *
     * Popping an item from the end of a list is constant O(1) - "AWESOME!!"
     */

    public function pop()
    {
        // Don't do anything if we don't have any items.
        if ($this->length === 0) return null;

        // Get the last value, stop storing it, and return it.
        $lastAddress = $this->length - 1;
        $value = $this->memory[$lastAddress];
        unset($this->memory[$lastAddress]);
        $this->length--;

        // Also return the value so it can be used.
        return $value;
    }

    /**
     * "push" and "pop" both operate on the end of a list, and overall are pretty
     * simple operations because they don't need to be concerned with the rest of
     * the list.
     *
     * Let's see what happens when we operate on the begining of the list with
     * "unshift" and "shift".
     */

    /**
     * In order to add a new item at the beginning of our list, we need to make
     * room for our value at the start by sliding all of the values over by one.
     *
     *     [a, b, c, d, e]
     *      0  1  2  3  4
     *       ⬊  ⬊  ⬊  ⬊  ⬊
     *         1  2  3  4  5
     *     [x, a, b, c, d, e]
     *
     * In order to slide all of the items over we need to iterate over each one
     * moving the prev value over.
     *
     * Because we have to iterate over every single item in the list:
     *
     * Unshifting an item to the start of a list is linear O(N) - "OKAY."
     */

    public function unshift($value)
    {
        // Store the value we are going to add to the start.
        $previous = $value;

        // Iterate through each item...
        for ($address = 0; $address < $this->length; $address++) {
            // replacing the "current" value with the "previous" value and storing the
            // "current" value for the next iteration.
            $current = $this->memory[$address];
            $this->memory[$address] = $previous;
            $previous = $current;
        }
        // Add the last item in a new position at the end of the list.
        $this->memory[$this->length] = $previous;
        $this->length++;
    }

    /**
     * Finally, we need to write a shift function to move in the opposite
     * direction.
     *
     * We delete the first value and then slide through every single item in the
     * list to move it down one address.
     *
     *     [x, a, b, c, d, e]
     *         1  2  3  4  5
     *       ⬋  ⬋  ⬋  ⬋  ⬋
     *      0  1  2  3  4
     *     [a, b, c, d, e]
     *
     * Shifting an item from the start of a list is linear O(N) - "OKAY."
     */

    public function shift()
    {
        // Don't do anything if we don't have any items.
        if ($this->length === 0) return null;

        $value = $this->memory[0];

        // Iterate through each item...
        for ($address = 0; $address < $this->length-1; $address++) {
            // and replace them with the next item in the list.
            $this->memory[$address] = $this->memory[$address + 1];
        }

        // Delete the last item since it is now in the previous address.
        unset($this->memory[$this->length - 1]);
        $this->length--;

        return $value;
    }
}