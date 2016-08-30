<?php
namespace ItsyBitsySataStructures;
/**
 * ============================================================================
 * ,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'
 * ============================================================================
 */

/**
 * From this point going forward we are going to stop interacting directly with
 * memory as the rest of these data structures start to be implemented with
 * other data structures.
 *
 * These data structures focus on doing two things:
 *
 *   - Organizing data based on how it is used
 *   - Abstracting away implementation details
 *
 * These data structures focus on creating an organization that makes sense for
 * various types of programs. They insert a language that allows you discuss
 * more complicated logic. All of this while abstracting away implementation
 * details so that their implementation can change to be made faster.
 */

/*** ===================================================================== ***\
 ** - STACKS -------------------------------------------------------------- **
 * ========================================================================= *
 *                             _ . - - -- .. _                               *
 *         ||||            .-'      /```\     `'-_             /|            *
 *         ||||           (     /`` \___/ ```\    )           | |            *
 *         \__/           |`"-//..__     __..\\-"`|           | |            *
 *          ||            |`"||...__`````__...||"`|           | |            *
 *          ||            |`"||...__`````__...||"`|           \ |            *
 *          ||       _,.--|`"||...__`````__...||"`|--.,_       ||            *
 *          ||    .'`     |`"||...__`````__...||"`|     `'.    ||            *
 *          ||   '.        `/ |...__`````__...| \         .'   ||            *
 *          ||     `'-..__  ``      `````      ``  __..-'`     ||            *
 *                        `""---,,,_______,,,---""`                          *
 **                                                                         **
 * \*** ===================================================================== ***/

/**
 * Stacks are similar to lists in that they have an order, but they limit you
 * to only pushing and popping values at the end of the list, Which as we saw
 * before are very fast operations when mapping directly to memory.
 *
 * However, Stacks can also be implemented with other data structures in order
 * to add functionality to them.
 *
 * The most common usage of stacks is places where you have one process adding
 * items to the stack, and other process removing them from the end–
 * prioritizing items added most recently.
 */
class Stack
{
    /**
     * We're going to again be backed by a JavaScript array, but this time it
     * represents a list like we implemented before rather than memory.
     */
    private $list = [];
    private $length = 0;


    /**
     * We're going to implement two of the functions from lists "push" and "pop"
     * which are going to be identical in terms of functionality.
     */

    /**
     * Push to add items to the top of the stack.
     */

    public function push($value)
    {
        $this->length++;
        array_push($this->list, $value);
    }

    /**
     * And pop to remove items from the top of the stack.
     */

    public function pop()
    {
        // Don't do anything if we don't have any items.
        if ($this->length === 0) return null;

        // Pop the last item off the end of the list and return the value.
        $this->length--;
        return array_pop($this->list);
    }

    /**
     * We're also going to add a function in order to view the item at the top of
     * the stack without removing it from the stack.
     */

    public function peek()
    {
        // Return the last item in "items" without removing it.
        return $this->list[$this->length - 1];
    }
}