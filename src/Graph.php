<?php
namespace ItsyBitsySataStructures;

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
     * \*** ===================================================================== ***/

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
class Graph
{

    /**
     * We'll hold onto all of our nodes in a regular JavaScript array. Not
     * because there is any particular order to the nodes but because we need a
     * way to store references to everything.
     */
    private $nodes = [];

    /**
     * We can start to add values to our graph by creating nodes without any
     * lines.
     */

    public function addNode($value)
    {
        array_push($this->nodes, (object)['value' => $value, 'lines' => []]);
    }

    /**
     * Next we need to be able to lookup nodes in the graph. Most of the time
     * you'd have another data structure on top of a graph in order to make
     * searching faster.
     *
     * But for our case we're simply going to search through all of nodes to find
     * the one with the matching value. This is a slower option, but it works for
     * now.
     */

    public function find($value)
    {
        foreach ($this->nodes as $node) {
            if ($node->value === $value) {
                return $node;
            }
        }
    }

    /**
     * Next we can connect two nodes by making a "line" from one to the other.
     */

    public function addLine($startValue, $endValue)
    {
        // Find the nodes for each value.
        $startNode = $this->find($startValue);
        $endNode = $this->find($endValue);

        // Freak out if we didn't find one or the other.
        if (!$startNode || !$endNode) {
            throw new \Exception('Both nodes need to exist');
        }

        // And add a reference to the endNode from the startNode.
        array_push($startNode->lines, $endNode);
    }
}

/**
 * Finally you can use a graph like this:
 *
 *     $graph = new Graph();
 *     graph.addNode(1);
 *     graph.addNode(2);
 *     graph.addLine(1, 2);
 *     $two = graph.find(1).lines[0];
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