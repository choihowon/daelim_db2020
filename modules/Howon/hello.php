<?php
namespace Modules\Howon;

// 클래스 선언
class Hello
{
    const MYNAME = "howon";
    // 클래스의 함수
    // 메소드 함.
    public function greeting()
    {
        echo self::MYNAME . "hello world";
    }
    //생성자
    public function __construct()
    {
        echo __CLASS__ . "<br>객체를 생성합니다.<br>";

        $DB_INFO = "mysql:";
        $DB_INFO .= "dbname=db2020;";
        $DB_INFO .= "charset=utf8;";
        $DB_INFO .= "host=localhost";

        $DB_USER = "db2020";
        $DB_PASSWORD = "123456";
        $conn = new \PDO($DB_INFO,$DB_USER,$DB_PASSWORD);

        // $db = new \Howon\Mysql\Connection();
        // //접속정보 설정
        // $db->setUser("db2020");
        // $db->setPassword("123456");
        // $db->setSchema("db2020");
        // $db->setCharset("");
        // $db->setHost("");

        // $conn->connect();//pdo 객체를 연결
        if($conn){
            echo "db접속 성공";
        }else{
            echo "db접속 실패...";
        }
    }
}
