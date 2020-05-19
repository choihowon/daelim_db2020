<?php

$args = [
    'hellow' => "안녕",
    'msg'=>"대림이"
];
function greeting($args){ //매개변수 입력

    extract($args); //매개변수를 분해
    echo  $hellow.' ', $msg.''; 
}
//함수는 선언을 하고 호출

greeting($args);//인자값 입력
