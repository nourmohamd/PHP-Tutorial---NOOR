<?php
// Lesson 30
// Cookies in PHP
// Cookie is a like localStorage in JavaScript
// The Diffrences between Cookie and Session
// Session: it clear when User Close Website
// Cookie: لن يقوم بحذف البيانات إلا عندما أنت تخبره بذلك
/*
1 - Create A Cookie Variable:
    setcookie("name of key", "value", options);
2 - Update A Cookie Variable:
    setcookie("name of key", "value", options);
3 - Call A Cookie Variable:
    echo $_COOKIE["name of key"];
4 - Delete A Cookie Variable:
    example:
    setcookie("username", "Omar");
    setcookie("username", "", time() - 1 * 60 * 60);
5 - Delete A Cookie Variable After Selected Time:
    setcookie("name of key", "value", time() + 1 * 60 * 60 *24); ===> Save Data For 1 Day
*/

// Lesson 31
// Encode And Decode With << AES-256-CBC Technics >> in PHP
// 1 - Encode Method
// Syntax:
/*
    openssl_encrypt($data, "AES-256-CBC", $key, 0, $iv);
    $data = "Data you want to encrypt it"
    "AES_256_CBC" ===> Method Of Encyption
    $key = "هذا المفتاح الذي يستخدم لتشفير وفك تشفير البيانات"
    $iv = "1234123412341234" ===> 16 خانة يمنع تغييره
*/
// 2 - Decode Method
// Syntax:
/*
    openssl_decrypt($encode, "AES-256-CBC", $key, 0, $iv);
    $data = "Data you want to encrypt it"
    "AES_256_CBC" ===> Method Of Encyption
    $key = "هذا المفتاح الذي يستخدم لتشفير وفك تشفير البيانات"
    $iv = "1234123412341234" ===> 16 خانة يمنع تغييره
*/

// Lesson 32
// Object Oriented Programming << OOP >> in PHP
// 1 - Class
// Create Class
class Car {
    function __construct() {
        echo "Hi From Class Car";
    }
}
// Create Object
$object1 = new Car();
// 2 - Access Modifires
// public - private - protected
class Car {
    public $pub = 100;
    private $pri = 200;
    protected $pro = 300;
    function __construct() {
        echo "Hi From Class Car : " . $this->pub + $this->pri + $this->pro; // Hi From Class Car : 300
    }
}
$object2 = new Car();
echo $object2->pub;
// 3 - Passing Parameters To Construct
class Car {
    function __construct($a, $b) {
        echo $a + $b;
    }
}
$object3 = new Car(100, 200); // 300
// 4 - Create Methods in Class
class Car {
    function __construct ($title) {
        $this->msg($title);
    }
    function msg($title) {
        echo "<p>". $title ."</p>";
    }
}
$ob = new Car("KiaRio");// KiaRio
// $ob = new Car(); 
// echo $ob->msg("Marcids");

// Lesson 33
// var_dump($var) VS print_r($var)
// 1 - var_dump($var) ===> أفضل عند التعامل مع المتغيرات وذلك للتأكد من قيمته ونوع القيمة المرجعة
// 2 - print_r($var) ===> يعرض تفاصيل عن المتغير ويستخدم مع جيسون بشكل أكبر
// Example:
$a = 1000;
print_r($a);
var_dump($a);

// Lesson 34
// All You Need To Know It About API in Back-End << Server - Side >>
// Methods Work With JSON
// Example:
$json = '{"name":"Mohamed Nour", "age":"24"}';
echo $json;
// 1 - Convertation Json To Object
$data_not_json = json_decode($json);
echo $data_not_json->name; // Mohamed Nour
// 2 - Convertation Json To Array
$data_array = json_decode($json, true);
echo $data_array["name"]; // Mohamed Nour
// 3 - Convertation Array Or Object To JSON
$arr = array("username" => "Mohamed Nour", "age" => 24);
$json2 = json_encode($arr);
print_r($json2);
// Always Use print_r() For Print << JSON >>
// 4 - Type Of Error In JSON
// json_last_error(); ===> يستخدم بعد تعريف الجيسون مباشرة ولا يستقبل بارميتر
/*
The Number That Return From json_last_error
0 JSON_ERROR_NONE
1 JSON_ERROR_DEPTH
2 JSON_ERROR_STATE_MISMATCH
3 JSON_ERROR_CTRL_CHAR
4 JSON_ERROR_SYNTAX
5 JSON_ERROR_UTF8
6 JSON_ERROR_RECURSION
7 JSON_ERROR_INF_OR_NAN
8 JSON_ERROR_UNSUPPORTED_TYPE
*/
// Example:
$json = '{"name":"Mohamed Nour", "age":"24"}';
echo json_encode($json);
$error = json_last_error();
echo $error;
?>