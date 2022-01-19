<?php
include_once "Queue.php";
$queue = new Queue();
$queue->enQueue(1);
$queue->enQueue(2);
$queue->enQueue(3);
$queue->enQueue(4);
echo "<pre>";
print_r($queue);
echo $queue->deQueue();
echo "<br>";
echo $queue->deQueue();
echo "<br>";
print_r($queue);
$queue->enQueue(3);
$queue->enQueue(4);
echo "<br>";
print_r($queue);