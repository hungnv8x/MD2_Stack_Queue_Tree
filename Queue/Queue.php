<?php

class Queue
{
    private $queues;

    public function __construct()
    {
        $this->queues=[];
    }

    public function isEmpty()
    {
        return empty($this->queues);
    }

    public function enQueue($item)
    {
        array_push($this->queues,$item);
    }

    public function deQueue()
    {
        if (!$this->isEmpty()){
            $item = $this->queues[0];
            array_shift($this->queues);
            return $item;
        }else{
            return "Co gi dau ma lay";
        }
    }
}