<?php

$args = [
    'hellow' => "안녕",
    'msg'=>"대림이"
];
function greeting($args){ //매개변수 입력
    echo  $args['hellow']," ", $args['msg']; 
}
//함수는 선언을 하고 호출

greeting($args);//인자값 입력

$args2 = [
    'msg'=>"대림이",
    'hellow' => "안녕",
    'num'=>"123456"
];
greeting($args2);