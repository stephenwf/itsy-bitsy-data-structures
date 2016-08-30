<?php
namespace ItsyBitsySataStructures;
/*** ===================================================================== ***\
 ** - QUEUES -------------------------------------------------------------- **
 * ========================================================================= *
 *                   /:""|                     ,@@@@@@.                      *
 *                  |: oo|_                   ,@@@@@`oo                      *
 *                  C     _)                  @@@@C   _)                     *
 *                    ) /                     "@@@@ '=                       *
 *                   /`\\                      ```)/                         *
 *                  || | |                       /`\\                        *
 *                  || | |                      || | \                       *
 *                  ||_| |                      || | /                       *
 *                  \( ) |                      ||_| |                       *
 *               |~~~`-`~~~|                    |))) |                       *
 *         (_)   |         |         (_)        |~~~/          (_)           *
 *         | |`""....__     __....""`| |`""...._|| /  __....""`| |           *
 *         | |`""....__`````__....""`| |`""....__`````__....""`| |           *
 *         | |       | ||```         | |        ||`|``         | |           *
 *         | |       |_||__          | |        ||_|__         | |           *
 *        ,| |, jgs  (____))        ,| |,       ((;:;:)       ,| |,          *
 **       `---`                     `---`                     `---`         **
 * \*** ===================================================================== ***/

/**
 * Next we're going to build a queue which is complimentary to stacks. The
 * difference is that this time you remove items from the start of the queue
 * rather than the end. Removing the oldest items rather than the most recent.
 *
 * Again, because this limits the amount of functionality, there are many
 * different ways of implementing it. A good way might be to use a linked list
 * which we will see later.
 */
class Queue
{

    /**
     * Again, our queue is using a JavaScript array as a list rather than memory.
     */
    private $list = [];
    private $length = 0;

    /**
     * Similar to stacks we're going to define two functions for adding and
     * removing items from the queue. The first is "enqueue".
     *
     * This will push values to the end of the list.
     */

    public function enqueue($value)
    {
        $this->length++;
        array_push($this->list, $value);
    }

    /**
     * Next is "dequeue", instead of removing the item from the end of the list,
     * we're going to remove it from the start.
     */

    public function dequeue()
    {
        // Don't do anything if we don't have any items.
        if ($this->length === 0) return null;

        // Shift the first item off the start of the list and return the value.
        $this->length--;
        return array_shift($this->list);
    }

    /**
     * Same as stacks we're going to define a "peek" function for getting the next
     * value without removing it from the stack.
     */

    public function peek()
    {
        return $this->list[0];
    }
}