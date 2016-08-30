<?php
include __DIR__ . "/vendor/autoload.php";

use ItsyBitsySataStructures\ItsyList;

$list = new ItsyList();
$list->push('testing 1');
$list->push('testing 2');
$list->push('testing 3');
$list->push('testing 4');

use ItsyBitsySataStructures\HashTable;

$hashTable = new HashTable();
$hashTable->set('first', 'first one');
$hashTable->set('second', 'second one');
$hashTable->set('third', 'third one');

use ItsyBitsySataStructures\Stack;

$stack = new Stack();
$stack->push('testing 1');
$stack->push('testing 2');
$stack->push('testing 3');

use ItsyBitsySataStructures\Queue;

$queue = new Queue();
$queue->enqueue('testing 1');
$queue->enqueue('testing 2');
$queue->enqueue('testing 3');


use ItsyBitsySataStructures\Graph;

$graph = new Graph();
$graph->addNode('first');
$graph->addNode('second');
$graph->addNode('third');
$graph->addNode('fourth');
$graph->addLine('first', 'third');
$graph->addLine('first', 'fourth');
$graph->addLine('third', 'fourth');

use ItsyBitsySataStructures\LinkedList;

$linkedList = new LinkedList();
$linkedList->add('testing 1', 0);
$linkedList->add('testing 2', 1);
$linkedList->add('testing 3', 2);
$linkedList->add('testing 4', 3);

use ItsyBitsySataStructures\Tree;

$tree = new Tree();
$tree->add('testing 1');
$tree->add('testing 2', 'testing 1');
$tree->add('testing 3', 'testing 1');
$tree->add('testing 4', 'testing 3');
$tree->add('testing 5', 'testing 4');

use ItsyBitsySataStructures\BinarySearchTree;

$binarySearchTree = new BinarySearchTree();
for ($i = 0; $i < 1000; $i++) {
    $binarySearchTree->add('testing ' . $i);
}
$binarySearchTree->contains('testing 936'); // true
$binarySearchTree->contains('not found!'); // false