<?php
include_once "Stack.php";
$stacks = new Stack(5);
$stacks->push(10);
$stacks->push(20);
$stacks->push(30);
$stacks->push(40);
$stacks->push(50);

echo "<pre>";
print_r($stacks);
$stacks->push(60);
$stacks->pop();
echo "<br>";
print_r($stacks);
echo $stacks->top();
echo "<br>";
print_r($stacks->getStacks());