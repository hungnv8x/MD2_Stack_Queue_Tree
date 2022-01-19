<?php

class Stack
{
    private $stacks;
    private $limit;

    /**
     * @param $limit
     */
    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->stacks = [];
    }

    public function push($item)
    {
        if (!$this->isFull()) {
            array_push($this->stacks, $item);
        } else {
            echo "Day roi";
        }
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            array_pop($this->stacks);
        } else {
            echo "Con gi dau ma xoa";
        }
    }

    public function top()
    {
        if(!$this->isEmpty()){
            $item = $this->stacks[count($this->stacks) - 1];
            array_pop($this->stacks);
            return $item;
        }else{
            return "Co gi dau ma lay" ;
        }
    }

    public function isEmpty()
    {
        return count($this->stacks) == 0;
    }

    public function isFull()
    {
        return count($this->stacks) >= $this->limit;
    }

    public function getStacks()
    {
        $arr=[];
        $count =count($this->stacks);
        for ($i = 0; $i < $count; $i++) {
            $arr[$i]=$this->top();
            $this->pop();
        }
        return $arr;
    }
}