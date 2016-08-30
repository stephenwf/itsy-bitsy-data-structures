<?php
namespace ItsyBitsySataStructures;

/**
 * Lists are great for fast access and dealing with items at the end. However,
 * as we've seen it isn't great at dealing with items not at the end of the
 * list and we have to manually hold onto memory addresses.
 *
 * So let's take a look at a different data structure and how it deals with
 * adding, accessing, and removing values without needing to know memory
 * addresses.
 */

/*** ===================================================================== ***\
 ** - HASH TABLES --------------------------------------------------------- **
 * ========================================================================= *
 *                           ((\                                             *
 *     (              _  ,-_  \ \                                            *
 *     )             / \/  \ \ \ \                                           *
 *     (            /)| \/\ \ \| |          .'---------------------'.        *
 *     `~()_______)___)\ \ \ \ \ |        .'                         '.      *
 *                 |)\ )  `' | | |      .'-----------------------------'.    *
 *                /  /,          |      '...............................'    *
 *        ejm     |  |          /         \   _____________________   /      *
 *                \            /           | |_)                 (_| |       *
 *                 \          /            | |                     | |       *
 *                  )        /             | |                     | |       *
 **                /       /              (___)                   (___)     **
 * \*** ===================================================================== ***/

/**
 * A hash table is a data structure that's *unordered*. Instead we have "keys" and "values" where we
 * computed an address in memory using the key.
 *
 * The basic idea is that we have keys that are "hashable" (which we'll get to
 * in a second) and can by used to add, access, and remove from memory very
 * efficiently.
 *
 *     $hashTable = new HashTable();
 *
 *     hashTable.set('myKey', 'myValue');
 *     hashTable.get('myKey'); // >> 'myValue'
 */
class HashTable
{
    private $memory;

    /**
     * Again we're going to use a plain JavaScript array to represent our memory.
     */

    public function constructor()
    {
        $this->memory = [];
    }

    /**
     * In order to store key-value pairs in memory from our hash table we need a
     * way to take the key and turn it into an address. We do this through an
     * operation known as "hashing".
     *
     * Basically it takes a key and serializes it into a unique number for that
     * key.
     *
     *    hashKey("abc") =>  96354
     *    hashKey("xyz") => 119193
     *
     * You have to be careful though, if you had a really big key you don't want
     * to match it to a memory address that does not exist.
     *
     * So the hashing algorithm needs to limit the size, which means that there
     * are a limited number of addresses for an unlimited number of values.
     *
     * The result is that you can end up with collisions. Places where two keys
     * get turned into the same address.
     *
     * Any real world hash table implementation would have to deal with this,
     * however we are just going to glaze over it and pretend that doesn't happen.
     */

    /**
     * Let's setup our "hashKey" function.
     *
     * Don't worry about understanding the logic of this function, just know that
     * it accepts a string and outputs a (mostly) unique address that we will use
     * in all of our other functions.
     */

    public function hashKey($key)
    {
        $hash = 0;
        for ($index = 0; $index < sizeof($key); $index++) {
            // Oh look– magic.
            $code = ord(substr($key, $index, 1));
            $hash = (($hash << 5) - $hash) + $code | 0;
        }
        return $hash;
    }

    /**
     * Next, lets define our "get" function so we have a way of accessing values
     * by their key.
     *
     * HashTable access is constant O(1) - "AWESOME!!"
     */

    public function get($key)
    {
        // We start by turning our key into an address.
        $address = $this->hashKey($key);
        // Then we simply return whatever is at that address.
        return $this->memory[$address];
    }

    /**
     * We also need a way of adding data before we access it, so we will create
     * a "set" function that inserts values.
     *
     * HashTable setting is constant O(1) - "AWESOME!!"
     */

    public function set($key, $value)
    {
        // Again we start by turning the key into an address.
        $address = $this->hashKey($key);
        // Then just set the value at that address.
        $this->memory[$address] = $value;
    }

    /**
     * Finally we just need a way to remove items from our hash table.
     *
     * HashTable deletion is constant O(1) - "AWESOME!!"
     */

    public function remove($key)
    {
        // As always, we hash the key to get an address.
        $address = $this->hashKey($key);
        // Then, if it exists, we `delete` it.
        if ($this->memory[$address]) {
            unset($this->memory[$address]);
        }
    }
}
