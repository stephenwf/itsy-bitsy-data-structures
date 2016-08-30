<?php
include __DIR__ . "/vendor/autoload.php";


/**
 * ███████████████═╗ ███████████████═╗   █████████████═╗ █████═╗   █████═╗
 * ███████████████ ║ ███████████████ ║ ███████████████ ║ █████ ║   █████ ║
 *  ╚═══█████ ╔════╝  ╚═══█████ ╔════╝ █████ ╔═════════╝ █████ ║   █████ ║
 *      █████ ║           █████ ║      █████ ║           █████ ║   █████ ║
 *      █████ ║           █████ ║      █████████████═╗   ███████████████ ║
 *      █████ ║           █████ ║       ╚█████████████═╗  ╚███████████ ╔═╝
 *      █████ ║           █████ ║         ╚══════█████ ║    ╚═█████ ╔══╝
 *      █████ ║           █████ ║                █████ ║      █████ ║
 * ███████████████═╗      █████ ║      ███████████████ ║      █████ ║
 * ███████████████ ║      █████ ║      █████████████ ╔═╝      █████ ║
 *  ╚══════════════╝       ╚════╝       ╚════════════╝         ╚════╝
 *
 * █████████████═══╗ ███████████████═╗ ███████████████═╗   █████████████═╗ █████═╗   █████═╗
 * ███████████████ ║ ███████████████ ║ ███████████████ ║ ███████████████ ║ █████ ║   █████ ║
 * █████ ╔═══█████ ║  ╚═══█████ ╔════╝  ╚═══█████ ╔════╝ █████ ╔═════════╝ █████ ║   █████ ║
 * █████ ║   █████ ║      █████ ║           █████ ║      █████ ║           █████ ║   █████ ║
 * █████████████ ╔═╝      █████ ║           █████ ║      █████████████═╗   ███████████████ ║
 * ███████████████═╗      █████ ║           █████ ║       ╚█████████████═╗  ╚███████████ ╔═╝
 * █████ ╔═══█████ ║      █████ ║           █████ ║         ╚══════█████ ║    ╚═█████ ╔══╝
 * █████ ║   █████ ║      █████ ║           █████ ║                █████ ║      █████ ║
 * ███████████████ ║ ███████████████═╗      █████ ║      ███████████████ ║      █████ ║
 * █████████████ ╔═╝ ███████████████ ║      █████ ║      █████████████ ╔═╝      █████ ║
 *  ╚════════════╝    ╚══════════════╝       ╚════╝       ╚════════════╝         ╚════╝
 *
 * █████████████═══╗  █████ ║   █████ ║  █████████████═══╗
 * ███████████████ ║  █████ ║   █████ ║  ███████████████ ║
 * █████ ╔═══█████ ║  █████ ║   █████ ║  █████ ╔═══█████ ║
 * █████ ║   █████ ║  █████ ║   █████ ║  █████ ║   █████ ║
 * ███████████████ ║  ███████████████ ║  ███████████████ ║
 * █████████████ ╔═╝  ███████████████ ║  █████████████ ╔═╝
 * █████ ╔═══════╝    █████ ╔═══█████ ║  █████ ╔═══════╝
 * █████ ║            █████ ║   █████ ║  █████ ║
 * █████ ║            █████ ║   █████ ║  █████ ║
 * █████ ║            █████ ║   █████ ║  █████ ║
 *  ╚════╝             ╚════╝    ╚════╝   ╚════╝
 *
 * █████████████═══╗   ███████████═══╗ ███████████████═╗   ███████████═══╗
 * ███████████████ ║ ███████████████ ║ ███████████████ ║ ███████████████ ║
 * █████ ╔═══█████ ║ █████ ╔═══█████ ║  ╚═══█████ ╔════╝ █████ ╔═══█████ ║
 * █████ ║   █████ ║ █████ ║   █████ ║      █████ ║      █████ ║   █████ ║
 * █████ ║   █████ ║ ███████████████ ║      █████ ║      ███████████████ ║
 * █████ ║   █████ ║ ███████████████ ║      █████ ║      ███████████████ ║
 * █████ ║   █████ ║ █████ ╔═══█████ ║      █████ ║      █████ ╔═══█████ ║
 * █████ ║   █████ ║ █████ ║   █████ ║      █████ ║      █████ ║   █████ ║
 * ███████████████ ║ █████ ║   █████ ║      █████ ║      █████ ║   █████ ║
 * █████████████ ╔═╝ █████ ║   █████ ║      █████ ║      █████ ║   █████ ║
 *  ╚════════════╝    ╚════╝    ╚════╝       ╚════╝       ╚════╝    ╚════╝
 *
 *   █████████████═╗ ███████████████═╗ █████████████═══╗ █████═╗   █████═╗   █████████████═╗ ███████████████═╗
 * ███████████████ ║ ███████████████ ║ ███████████████ ║ █████ ║   █████ ║ ███████████████ ║ ███████████████ ║
 * █████ ╔═════════╝  ╚═══█████ ╔════╝ █████ ╔═══█████ ║ █████ ║   █████ ║ █████ ╔═════════╝  ╚═══█████ ╔════╝
 * █████ ║                █████ ║      █████ ║   █████ ║ █████ ║   █████ ║ █████ ║                █████ ║
 * █████████████═╗        █████ ║      █████████████ ╔═╝ █████ ║   █████ ║ █████ ║                █████ ║
 *  ╚█████████████═╗      █████ ║      ███████████████═╗ █████ ║   █████ ║ █████ ║                █████ ║
 *    ╚══════█████ ║      █████ ║      █████ ║   █████ ║ █████ ║   █████ ║ █████ ║                █████ ║
 *           █████ ║      █████ ║      █████ ║   █████ ║ █████ ║   █████ ║ █████ ║                █████ ║
 * ███████████████ ║      █████ ║      █████ ║   █████ ║ ███████████████ ║ ███████████████═╗      █████ ║
 * █████████████ ╔═╝      █████ ║      █████ ║   █████ ║  ╚███████████ ╔═╝  ╚█████████████ ║      █████ ║
 *  ╚════════════╝         ╚════╝       ╚════╝    ╚════╝    ╚══════════╝      ╚════════════╝       ╚════╝
 *
 * █████═╗   █████═╗ █████████████═══╗ ████████████████═╗   ██████████████═╗
 * █████ ║   █████ ║ ███████████████ ║ ████████████████ ║ ████████████████ ║
 * █████ ║   █████ ║ █████ ╔═══█████ ║ █████ ╔══════════╝ █████ ╔══════════╝
 * █████ ║   █████ ║ █████ ║   █████ ║ █████ ║            █████ ║
 * █████ ║   █████ ║ █████████████ ╔═╝ ████████████████═╗ ██████████████═╗
 * █████ ║   █████ ║ ███████████████═╗ ████████████████ ║  ╚██████████████═╗
 * █████ ║   █████ ║ █████ ║   █████ ║ █████ ╔══════════╝    ╚═══════█████ ║
 * █████ ║   █████ ║ █████ ║   █████ ║ █████ ║                       █████ ║
 * ███████████████ ║ █████ ║   █████ ║ ████████████████═╗ ████████████████ ║
 *  ╚███████████ ╔═╝ █████ ║   █████ ║ ████████████████ ║ ██████████████ ╔═╝
 *    ╚══════════╝    ╚════╝    ╚════╝  ╚═══════════════╝  ╚═════════════╝
 *
 * ══════════════════════════════════════════════════════════════════════
 * ████ By James Kyle (@thejameskyle) █████████████████████████████████████████
 * ══════════════════════════════════════════════════════════════════════
 */

/**
 * Today we're gonna learn all about data structures.
 *
 *    "OOooooOOOooh *soo* exciting" right?
 *
 * Yeah, they definitely aren't the juiciest topic out there, but they are
 * important. Not just to pass computer science 101, but in order to be a
 * better programmer.
 *
 * Knowing your data structures can help you:
 *
 *   - Manage complexity and make your programs easier to follow.
 *   - Build high-performance, memory-efficient programs.
 *
 * I believe that the former is more important. Using the
 * right data structure can drastically simplify what would otherwise be
 * complicated logic.
 *
 * The latter is important too. If performance or memory matters then
 * using the right data structure is more than often essential.
 *
 * In order to learn about data structures, we're going to implement a few of
 * them together. Don't worry, we'll keep the code nice and short. In fact,
 * there are way more comments than there is code.
 */

/**
 * ============================================================================
 * ,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'
 * ============================================================================
 */

/**
 * What are data structures?
 *
 * Essentially, they are different methods of storing and organizing data that
 * serve a number of different needs.
 *
 * Data can always be represented in many different ways. However, depending on
 * what that data is and what you need to do with it, one representation will
 * be a better choice than the others.
 *
 * To understand why, let's first talk a bit about algorithms.
 */

/*** ===================================================================== ***\
 ** - ALGORITHMS ---------------------------------------------------------- **
 * ========================================================================= *
 *                                                                           *
 *                        ,--,--.    ,--,--.                                 *
 *   ,----------.        |   |   |  |   |   |            _____               *
 *  |`----------'|       |   |   |  |   |   |           |     |    ,------.  *
 *  |            |       |   |   |  |   |   |      ,--. | o o |   |`------'| *
 *  |            |      ,| +-|-+ |  | +-|-+ |`     |  | |_____|   |        | *
 *  |            | ,:==| | |###|======|###| | |====#==#====#=,,   |        | *
 *  |            | ||   `| +---+ |  | +---+ |'  ,,=#==#====O=``  ,|        | *
 *  |            | ||    |   |   |  |   |   |   ``=#==#====#=====||        | *
 *   `----------'  ||    |   |   |  |   |   |      |__|          `|        | *
 *    | | ``=| |===``    `--,',--`  `--,',--`      /||\            `------'  *
 **   \_/    \_/         / /   \ \  / /   \ \     //||\\           |_|  |_| **
\*** ===================================================================== ***/

/**
 * Algorithms is a fancy name for step-by-step sets of operations to be
 * performed.
 *
 * Data structures are implemented with algorithms, and algorithms are
 * implemented with data structures. It's data structures and algorithms all
 * the way down until you reach the micro-scopic people with punch cards that
 * control the computer (Yeah– Intel is enslaving super tiny people. Wake up
 * sheeple!)
 *
 * Any given task can be implemented in an infinite number of ways. So for
 * common tasks there are often many different algorithms that people have come up
 * with.
 *
 * For example, there are an absurd number of algorithms for sorting a set of
 * unordered items:
 *
 *     Insertion Sort, Selection Sort, Merge Sort, Bubble Sort, Heap Sort,
 *     Quick Sort, Shell Sort, Timsort, Bucket Sort, Radix Sort, ...
 *
 * Some of these are significantly faster than others. Some use less memory.
 * Some are easy to implement. Some are based on assumptions about the dataset.
 *
 * Every single one of them will be better for *something*. So you'll need to
 * make a decision based on what your needs are and for that you'll need a way
 * of comparing them, a way to measure them.
 *
 * When we compare the performance of algorithms we use a rough measurement of
 * their average and worst-case performance using something called "Big-O".
 */

/*** ===================================================================== ***\
 ** - BIG-O NOTATION ------------------------------------------------------ **
 * ========================================================================= *
 *           a           b                                 d                 *
 *           a         b    O(N^2)                      d                    *
 *     O(N!) a        b                O(N log N)    d                    c  *
 *           a      b                            d                 c         *
 *          a      b                          d             c        O(N)    *
 *          a    b                         d         c                       *
 *          a  b                       d      c                              *
 *         a  b                     d  c                                     *
 *         ab                   c                          O(1)              *
 *  e    e    e    e    ec   d    e    e    e    e    e     e    e    e      *
 *      ba        c      d                                                   *
 *    ba   c        d                       f    f    f    f    f    f    f  *
 ** cadf    f d    f    f    f    f    f       O(log N)                     **
\*** ===================================================================== ***/

/**
 * Big-O Notation is a way of roughly measuring the performance of algorithms
 * in order to compare one against another when discussing them.
 *
 * Big-O is a mathematical notation that we borrowed in computer science to
 * classify algorithms by how they respond to the number (N) of items that you
 * give them.
 *
 * There are two primary things that you measure with Big-O:
 *
 * - **Time complexity** refers to the total count of operations an algorithm
 *   will perform given a set of items.
 *
 * - **Space complexity** refers to the total memory an algorithm will take up
 *   while running given a set of items.
 *
 * We measure these independently from one another because while an algorithm
 * may perform less operations than another, it may also take up way more
 * memory. Depending on what your requirements are, one may be a better choice
 * than the other.
 *
 * These are some common Big-O's:
 *
 *     Name           Notation     How you feel when they show up at your party
 *     ------------------------------------------------------------------------
 *     Constant       O(1)         AWESOME!!
 *     Logarithmic    O(log N)     GREAT!
 *     Linear         O(N)         OKAY.
 *     Linearithmic   O(N log N)   UGH...
 *     Polynomial     O(N ^ 2)     SHITTY
 *     Exponential    O(2 ^ N)     HORRIBLE
 *     Factorial      O(N!)        WTF
 *
 * To give you an idea of how many operations we're talking about. Let's look
 * at what these would equal given the (N) number of items.
 *
 *                N = 5            10             20             30
 *     -----------------------------------------------------------------------
 *     O(1)           1            1              1              1
 *     O(log N)       1.6094...    2.3025...      2.9957...      3.4011...
 *     O(N)           5            10             20             30
 *     O(N log N)     8.0471...    23.0258...     59.9146...     102.0359...
 *     O(N ^ 2)       25           100            400            900
 *     O(2 ^ N)       32           1024           1,048,576      1,073,741,824
 *     O(N!)          120          3,628,800      2,432,902,0... 265,252,859,812,191,058,636,308,480,000,000
 *
 * As you can see, even for relatively small sets of data you could do a *lot*
 * of extra work.
 *
 * With data structures, you can perform 4 primary types of actions:
 * Accessing, Searching, Inserting, and Deleting.
 *
 * It is important to note that data structures may be good at one action but
 * bad at another.
 *
 *                            Accessing    Searching    Inserting    Deleting
 *    -------------------------------------------------------------------------
 *                  Array     O(1)         O(N)         O(N)         O(N)
 *            Linked List     O(N)         O(N)         O(1)         O(1)
 *     Binary Search Tree     O(log N)     O(log N)     O(log N)     O(log N)
 *
 * Or rather...
 *
 *                            Accessing    Searching    Inserting    Deleting
 *    -------------------------------------------------------------------------
 *                  Array     AWESOME!!    OKAY         OKAY         OKAY
 *            Linked List     OKAY         OKAY         AWESOME!!    AWESOME!!
 *     Binary Search Tree     GREAT!       GREAT!       GREAT!       GREAT!
 *
 * Even further, some actions will have a different "average" performance and a
 * "worst case scenario" performance.
 *
 * There is no perfect data structure, and you choose one over another based on
 * the data that you are working with and the things you are going to do with
 * it. This is why it is important to know a number of different common data
 * structures so that you can choose from them.
 */

/*** ===================================================================== ***\
 ** - MEMORY -------------------------------------------------------------- **
 * ========================================================================= *
 *                             _.-..                                         *
 *                           ,'9 )\)`-.,.--.                                 *
 *                           `-.|           `.                               *
 *                              \,      ,    \)                              *
 *                               `.  )._\   (\                               *
 *                                |//   `-,//                                *
 *                                ]||    //"                                 *
 **                        hjw    ""    ""                                  **
\*** ===================================================================== ***/

/**
 * A computer's memory is pretty boring, it's just a bunch of ordered slots
 * where you can store information. You hold onto memory addresses in order to
 * find information.
 *
 * Lets imagine a chunk of memory like this:
 *
 *      Values: |1001|0110|1000|0100|0101|1010|0010|0001|1101|1011...
 *   Addresses: 0    1    2    3    4    5    6    7    8    9    ...
 *
 * If you've ever wondered why things are zero-indexed in programming languages
 * before, it is because of the way that memory works. If you want to read the
 * first chunk of memory you read from 0 to 1, the second you read from 1 to 2.
 * So the address that you hold onto for each of those is 0 and 1 respectively.
 *
 * Your computer has much much more memory than this, and it is all just a
 * continuation of the pattern above.
 *
 * Memory is a bit like the wild west, every program running on your machine is
 * stored within this same *physical* data structure. Without layers of
 * abstraction over it, it would be extremely difficult to use.
 *
 * But these abstractions serve two additional purposes:
 *
 *   - Storing data in memory in a way that is more efficient and/or faster to
 *     work with.
 *   - Storing data in memory in a way that makes it easier to use.
 */

/*** ===================================================================== ***\
 ** - LISTS --------------------------------------------------------------- **
 * ========================================================================= *
 *                  *     _______________________                            *
 *                    ()=(_______________________)=()           *            *
 *       *                |                     |                            *
 *                        |   ~ ~~~~~~~~~~~~~   |       *               *    *
 *             *          |                     |                            *
 *   *                    |   ~ ~~~~~~~~~~~~~   |         *                  *
 *                        |                     |                            *
 *                        |   ~ ~~~~~~~~~~~~~   |                 *          *
 *        *               |                     |                            *
 *                   *    |_____________________|         *        *         *
 *                    ()=(_______________________)=()                        *
 **                                                                         **
\*** ===================================================================== ***/

/**
 * To demonstrate the raw interaction between memory and a data structure we're
 * going to first implement a list.
 *
 * A list is a representation of an ordered sequence of values where the same
 * value may appear many times.
 */
use ItsyBitsySataStructures\ItsyList;

$list = new ItsyList();
$list->push('testing 1');
$list->push('testing 2');
$list->push('testing 3');
$list->push('testing 4');

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
\*** ===================================================================== ***/

/**
 * A hash table is a data structure that's *unordered*. Instead we have "keys" and "values" where we
 * computed an address in memory using the key.
 *
 * The basic idea is that we have keys that are "hashable" (which we'll get to
 * in a second) and can by used to add, access, and remove from memory very
 * efficiently.
 *
 *     var hashTable = new HashTable();
 *
 *     hashTable.set('myKey', 'myValue');
 *     hashTable.get('myKey'); // >> 'myValue'
 */

use ItsyBitsySataStructures\HashTable;

$hashTable = new HashTable();
$hashTable->set('first', 'first one');
$hashTable->set('second', 'second one');
$hashTable->set('third', 'third one');

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
\*** ===================================================================== ***/

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

use ItsyBitsySataStructures\Stack;

$stack = new Stack();
$stack->push('testing 1');
$stack->push('testing 2');
$stack->push('testing 3');

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
\*** ===================================================================== ***/

/**
 * Next we're going to build a queue which is complimentary to stacks. The
 * difference is that this time you remove items from the start of the queue
 * rather than the end. Removing the oldest items rather than the most recent.
 *
 * Again, because this limits the amount of functionality, there are many
 * different ways of implementing it. A good way might be to use a linked list
 * which we will see later.
 */
use ItsyBitsySataStructures\Queue;

$queue = new Queue();
$queue->enqueue('testing 1');
$queue->enqueue('testing 2');
$queue->enqueue('testing 3');

/**
 * The important thing to note here is that because we used a list to back our
 * queue it inherits the performance of "shift" which is linear O(N) "OKAY."
 *
 * Later we'll see linked lists that will allow us to implement a much faster
 * Queue.
 */

/**
 * ============================================================================
 * ,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'
 * ============================================================================
 */

/**
 * From this point forward we're going to start dealing with data structures
 * where the values of the data structure reference one another.
 *
 *    +- Data Structure ---------------------------------------+
 *    |  +- Item A ---------------+ +- Item B ---------------+ |
 *    |  | Value: 1               | | Value: 2               | |
 *    |  | Reference to: (Item B) | | Reference to: (Item A) | |
 *    |  +------------------------+ +------------------------+ |
 *    +--------------------------------------------------------+
 *
 * The values inside the data structure become their own mini data structures
 * in that they contain a value along with additional information including
 * references to other items within the overall data structure.
 *
 * You'll see what I mean by this in a second.
 */

/*** ===================================================================== ***\
 ** - GRAPHS -------------------------------------------------------------- **
 * ========================================================================= *
 *                                                                           *
 *   |                                 RICK ASTLEY'S NEVER GONNA...          *
 *   |       +-+                                                             *
 *   |  +-+  |-|                          [^] - GIVE YOU UP                  *
 *   |  |^|  |-|                 +-+      [-] - LET YOU DOWN                 *
 *   |  |^|  |-|       +-+       |*|      [/] - RUN AROUND AND DESERT YOU    *
 *   |  |^|  |-|  +-+  |\|       |*|      [\] - MAKE YOU CRY                 *
 *   |  |^|  |-|  |/|  |\|  +-+  |*|      [.] - SAY GOODBYE                  *
 *   |  |^|  |-|  |/|  |\|  |.|  |*|      [*] - TELL A LIE AND HURT YOU      *
 *   |  |^|  |-|  |/|  |\|  |.|  |*|                                         *
 *   +--------------------------------                                       *
 **                                                                         **
\*** ===================================================================== ***/

/**
 * Contrary to the ascii art above, a graph is not a visual chart of some sort.
 *
 * Instead imagine it like this:
 *
 *     A –→ B ←–––– C → D ↔ E
 *     ↑    ↕     ↙ ↑     ↘
 *     F –→ G → H ← I ––––→ J
 *          ↓     ↘ ↑
 *          K       L
 *
 * We have a bunch of "nodes" (A, B, C, D, ...) that are connected with lines.
 *
 * These nodes are going to look like this:
 *
 *     Node {
 *       value: ...,
 *       lines: [(Node), (Node), ...]
 *     }
 *
 * The entire graph will look like this:
 *
 *     Graph {
 *       nodes: [
 *         Node {...},
 *         Node {...},
 *         ...
 *       ]
 *     }
 */

use ItsyBitsySataStructures\Graph;

$graph = new Graph();
$graph->addNode('first');
$graph->addNode('second');
$graph->addNode('third');
$graph->addNode('fourth');
$graph->addLine('first', 'third');
$graph->addLine('first', 'fourth');
$graph->addLine('third', 'fourth');

/**
 * Finally you can use a graph like this:
 *
 *     var graph = new Graph();
 *     graph.addNode(1);
 *     graph.addNode(2);
 *     graph.addLine(1, 2);
 *     var two = graph.find(1).lines[0];
 *
 * This might seem like a lot of work to do very little, but it's actually a
 * quite powerful pattern, especially for finding sanity in complex programs.
 *
 * They do this by optimizing for the connections between data rather than
 * operating on the data itself. Once you have one node in the graph, it's
 * extremely simple to find all the related items in the graph.
 *
 * Tons of things can be represented this way, users with friends, the 800
 * transitive dependencies in a node_modules folder, the internet itself is a
 * graph of webpages connected together by links.
 */

/*** ===================================================================== ***\
 ** - LINKED LISTS -------------------------------------------------------- **
 * ========================================================================= *
 *      _______________________                                              *
 *  ()=(_______________________)=()              ,-----------------,_        *
 *      |                     |               ,"                      ",     *
 *      |   ~ ~~~~~~~~~~~~~   |             ,'    ,---------------,     `,   *
 *      |               ,----------------------------,          ,----------- *
 *      |   ~ ~~~~~~~~ |                              |        |             *
 *      |               `----------------------------'          `----------- *
 *      |   ~ ~~~~~~~~~~~~~   |            `,    `----------------'     ,'   *
 *      |                     |              `,                      ,'      *
 *      |_____________________|                 `------------------'         *
 *  ()=(_______________________)=()                                          *
 **                                                                         **
\*** ===================================================================== ***/

/**
 * Next we're going to see how a graph-like structure can help optimize ordered
 * lists of data.
 *
 * Linked lists are a very common data structure that is often used to
 * implement other data structures because of its ability to efficiently add
 * items to the start, middle, and end.
 *
 * The basic idea of a linked list is similar to a graph. You have nodes that
 * point to other nodes. They look sorta like this:
 *
 *     1 -> 2 -> 3 -> 4 -> 5
 *
 * Visualizing them as a JSON-like structure looks like this:
 *
 *     {
 *       value: 1,
 *       next: {
 *         value: 2,
 *         next: {
 *           value: 3,
 *           next: {...}
 *         }
 *       }
 *     }
 */

use ItsyBitsySataStructures\LinkedList;

$linkedList = new LinkedList();
$linkedList->add('testing 1', 0);
$linkedList->add('testing 2', 1);
$linkedList->add('testing 3', 2);
$linkedList->add('testing 4', 3);

/**
 * ============================================================================
 * ,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'`'-.,.-'
 * ============================================================================
 */

/**
 * The remaining two data structures we are going to cover are both in the
 * "tree" family.
 *
 * Much like real life, there are many different types of tree data structures.
 *
 *     Binary Trees:
 *       AA Tree, AVL Tree, Binary Search Tree, Binary Tree, Cartesian Tree,
 *       left child/right sibling tree, order statistic tree, Pagoda, ...
 *
 *     B Trees:
 *       B Tree, B+ Tree, B* Tree, B Sharp Tree, Dancing Tree, 2-3 Tree, ...
 *
 *     Heaps:
 *       Heap, Binary Heap, Weak Heap, Binomial Heap, Fibonacci Heap, Leonardo
 *       Heap, 2-3 Heap, Soft Heap, Pairing Heap, Leftist Heap, Treap, ...
 *
 *     Trees:
 *       Trie, Radix Tree, Suffix Tree, Suffix Array, FM-index, B-trie, ...
 *
 *     Multi-way Trees:
 *       Ternary Tree, K-ary tree, And-or tree, (a,b)-tree, Link/Cut Tree, ...
 *
 *     Space Partitioning Trees:
 *       Segment Tree, Interval Tree, Range Tree, Bin, Kd Tree, Quadtree,
 *       Octree, Z-Order, UB-Tree, R-Tree, X-Tree, Metric Tree, Cover Tree, ...
 *
 *     Application-Specific Trees:
 *       Abstract Syntax Tree, Parse Tree, Decision Tree, Minimax Tree, ...
 *
 * Little did you know you'd be studying dendrology today... and thats not even
 * all of them. But don't let any of this scare you, most of those don't matter
 * at all. There were just a lot of Computer Science PhDs who had something to
 * prove.
 *
 * Trees are much like graphs or linked lists except they are "unidirectional".
 * All this means is that they can't have loops of references.
 *
 *        Tree:                Not a Tree:
 *
 *          A                        A
 *        ↙   ↘                    ↗   ↘
 *      B       C                B ←–––– C
 *
 * If you can draw a loop between connected nodes in a tree... well, you don't
 * have a tree.
 *
 * Trees have many different uses, they can be used to optimize searching or
 * sorting. They can organize programs better. They can give you a
 * representation that is easier to work with.
 */

/*** ===================================================================== ***\
 ** - TREES --------------------------------------------------------------- **
 * ========================================================================= *
 *            ccee88oo             \ | /                                     *
 *          C8O8O8Q8PoOb o8oo    '-.;;;.-,   ooooO8O8QOb o8bDbo              *
 *        dOB69QO8PdUOpugoO9bD  -==;;;;;==-aadOB69QO8PdUOpugoO9bD            *
 *       CgggbU8OU qOp qOdoUOdcb .-';;;'-.  CgggOU ddqOp qOdoUOdcb           *
 *           6OuU  /p u gcoUodpP   / | \ jgs  ooSec cdac pdadfoof            *
 *             \\\//  /douUP         '         \\\d\\\dp/pddoo               *
 *               \\\////                         \\ \\////                   *
 *                |||/\                           \\///                      *
 *                |||\/                           ||||                       *
 *                |||||                          /|||                        *
 ** .............//||||\.......................//|||\\..................... **
\*** ===================================================================== ***/

/**
 * We'll start off with an extremely simple tree structure. It doesn't have any
 * special rules to it and looks someting like this:
 *
 *     Tree {
 *       root: {
 *         value: 1,
 *         children: [{
 *           value: 2,
 *           children: [...]
 *         }, {
 *           value: 3,
 *           children: [...]
 *         }]
 *       }
 *     }
 */

use ItsyBitsySataStructures\Tree;

$tree = new Tree();
$tree->add('testing 1');
$tree->add('testing 2', 'testing 1');
$tree->add('testing 3', 'testing 1');
$tree->add('testing 4', 'testing 3');
$tree->add('testing 5', 'testing 4');

/**
 * This is one of the most basic trees you could have and is probably only
 * useful if the data you are representing actually resembles a tree.
 *
 * But with some extra rules a tree can serve a lot of different purposes.
 */

/*** ===================================================================== ***\
 ** - BINARY SEARCH TREES ------------------------------------------------- **
 * ========================================================================= *
 * 0 0 1 0 1 0 0 1 0 1 1 1 0 1  ,@@@@@@@@@@@@@@,   0 0 1 0 1 0 0 1 0 1 1 1 0 *
 * 0 1 0 1 0 1 0 1 1 0 1 1 0  @@`              '@@   0 1 0 1 0 1 1 0 1 0 1 0 *
 * 1 1 0 0 0 1 0 0 1 1 1 0  @@`   8O8PoOb o8o    '@@   0 0 1 0 0 1 0 0 1 1 1 *
 * 0 0 1 1 0 1 0 1 0 0 0  @@   dOB69QO8PdUgoO9bD    @@   1 0 1 1 0 1 0 1 0 0 *
 * ===================== @@   CgbU8OU qOp qOdOdcb    @@  0 1 1 0 1 0 1 0 1 0 *
 *                       @@      6OU /p u gcoUpP     @@  1 0 1 1 0 1 0 0 1 1 *
 * ===================== @@         \\// /doP        @@  0 1 1 0 0 1 0 0 1 0 *
 * 1 1 0 0 1 1 0 1 1 0 0  @@         \\//           @@   1 0 1 0 0 1 1 0 1 1 *
 * 0 1 1 0 1 0 1 1 0 1 1 0  @@,      |||          ,@@  0 1 1 0 1 1 0 0 1 0 1 *
 * 1 0 1 0 1 1 0 0 1 0 0 1 0  @@,   //|\       ,@@   0 1 0 1 0 1 1 0 0 1 1 0 *
 **  1 0 1 0 0 1 1 0 1 0 1 0 1  `@@@@@@@@@@@@@@'   0 1 1 1 0 0 1 0 1 0 1 1  **
\*** ===================================================================== ***/

/**
 * Binary search trees are a fairly common form of tree for their ability to
 * efficiently access, search, insert, and delete values all while keeping them
 * in a sorted order.
 *
 * Imagine taking a sequence of numbers:
 *
 *     1  2  3  4  5  6  7
 *
 * And turning it into a tree starting from the center.
 *
 *              4
 *           /     \
 *        2           6
 *      /   \       /   \
 *     1     3     5     7
 *    -^--^--^--^--^--^--^-
 *     1  2  3  4  5  6  7
 *
 * This is how a binary tree works. Each node can have two children:
 *
 *     - Left: Less than parent node's value.
 *     - Right: Greater than parent node's value.
 *
 * > Note: In order to make this work all values must be unique in the tree.
 *
 * This makes the traversal to find a value very efficient. Say we're trying to
 * find the number 5 in our tree:
 *
 *             (4)         <--- 5 > 4, so move right.
 *           /     \
 *        2         (6)    <--- 5 < 6, so move left.
 *      /   \       /   \
 *     1     3    (5)    7 <--- We've reached 5!
 *
 * Notice how we only had to do 3 checks to reach the number 5. If we were to
 * expand this tree to 1000 items. We'd go:
 *
 *   500 -> 250 -> 125 -> 62 -> 31 -> 15 -> 7 -> 3 -> 4 -> 5
 *
 * Only 10 checks for 1000 items!
 *
 * The other important thing about binary search trees is that they are similar
 * to linked lists in the sense that you only need to update the immediately
 * surrounding items when adding or removing a value.
 */

use ItsyBitsySataStructures\BinarySearchTree;

$binarySearchTree = new BinarySearchTree();
for ($i = 0; $i < 1000; $i++) {
    $binarySearchTree->add('testing ' . $i);
}
$binarySearchTree->contains('testing 936'); // true
$binarySearchTree->contains('not found!'); // false