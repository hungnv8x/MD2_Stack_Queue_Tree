<?php
include_once "../Stack/Stack.php";
$arr = [1,2,3,4,5,6,7,8];
$stacks = new Stack(count($arr));
for ($i =0;$i < count($arr);$i++){
    $stacks->push($arr[$i]);
}
$arr1 =[];
for ($i =0;$i < count($arr);$i++){
    $arr1[]=$stacks->top();
    $stacks->pop();
}
echo "<pre>";
print_r($arr);
print_r($arr1) ;