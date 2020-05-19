<?php

$args = [
    'hellow' => "안녕",
    'msg'=>"대림이"
];
function greeting($args){ //매개변수 입력

    // extract($args); //매개변수를 분해
    // echo  $args.'hellow', $args.'msg'; 
    foreach ($args as $key => $value){
        //echo $value."\n";
        $key ($value);
    }
}
function hellow($v){
    echo $v, " ";
}
function msg($v){
    echo $v, " ";
}

greeting($args);//인자값 입력
