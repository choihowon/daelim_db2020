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

        //데이터베이스 설정값
        $dbinfo = include("../dbinfo.php");
        $db = new \Jiny\Mysql\Connection($dbinfo);
        /*$db->setUser("db2020")->setPassword("123456");
        $db->setSchema("db2020")->setCharset();
        $db->setHost();*/
        $db->connect();//pdo 객체를 연결
        

        // $db = new \Howon\Mysql\Connection();
        // //접속정보 설정
        // $db->setUser("db2020");
        // $db->setPassword("123456");
        // $db->setSchema("db2020");
        // $db->setCharset("");
        // $db->setHost("");

        /*
        if (extension_loaded("PDO") && extension_loaded("pdo_mysql")) {
                    // $conn->connect();//pdo 객체를 연결
            $conn = new \PDO($DB_INFO,$DB_USER,$DB_PASSWORD);
            if($conn){
                echo "db접속 성공";
            }else{
                echo "db접속 실패...";
            }   

        } else {
            echo "PDO 드라이버가 활성화 되어 있지 않습니다.\n";
            exit(1); // 오류 종료
        }
        */
    }

}
