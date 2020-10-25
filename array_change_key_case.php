<?php

/*
***********************************************************

Topic   : Program to change key cases in an array in PHP.
Author  : Chpaone09®
Date    : Oct 25, 2020

************************************************************
*/


$a = array(
"naMe"=> "abc",
"aGE"=> 25
);

echo "<pre>";print_r(array_change_key_case($a, CASE_UPPER));

?>