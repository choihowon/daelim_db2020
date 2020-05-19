<?php
namespace Modules\Gogi;

//클래스 선언
class Hello{
    const MYNAME = "howon";
    //클래스의 함수 == 메소드라고 함
    public function greeting()
    {
        echo self::MYNAME . "hello world";
    }
}
