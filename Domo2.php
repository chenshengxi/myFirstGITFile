<?php
// 定义一个变量a
$a = range(0,1000);
var_dump(memory_get_usage());
echo "<br>";

// 定义一个变量b，将a变量的值赋值给b
// COW : Copy On Write
$b = $a;
var_dump(memory_get_usage());
$c = &$a;
var_dump(memory_get_usage());
echo "<br>";
// 对a进行修改
$a = range(0,1000);
var_dump(memory_get_usage());
