<?php
// Lesson 19
// Filter_Var And Strip_Tags
// For Filter HTML Element Use Under Rules :
$el = "<h1>Montaser</h1>";
echo $el;# Montaser ===> As Element
// by strip_tags(var) Function
$strip = strip_tags($el);
echo $strip;# <h1>Montaser</h1> ===> As String
// by filter_var(var, FILTER_SANITIZE_STRING)
$filter_v = filter_var($el, FILTER_SANITIZE_STRING);
echo $filter_v;# <h1>Montaser</h1> ===> As String

// Lesson 20
// html element / encode | decode
// htmlspecialchars(var) ===> Transform Element To String
// htmlspecialchars_decode(var) ===> Transform String To Element

echo htmlspecialchars($el);# <h1>Montaser</h1> ===> String
echo htmlspecialchars_decode(htmlspecialchars($el));# Montaser ===> As Element

// Lesson 21
// Filter_Var & Filter_Input
// Filter_Var
// Syntax filter_var($var, Type Of Filter) ===> Boolean (True | False)
/*
$var:
    Variable, $_GET["name"], $_POST["name"], ...
Type Of Filter:
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_DOUBLE
    FILTER_VALIDATE_BOOLEAN
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_MAC
*/
// Example:
/*
HTML:
    <form method="GET">
        <input type="email" name="email" />
        <input type="submit" name="send" value="Send" />
    </form>
PHP:
*/
if(isset($_GET["send"])) {
    $filter = filter_var($_GET["email"], FILTER_VALIDATE_EMAIL);// True(Email) | False(Otherwise)
    if($filter) {
        echo "Yes The Data is Email";
    } else {
        echo "Data is not Email";
    }
}
// Filter_Input
// Syntax: filter_input(INPUT_GET|INPUT_POST, "name of field", Type Of Filter)
/*
Type Of Filter:
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_DOUBLE
    FILTER_VALIDATE_BOOLEAN
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_MAC
*/
// Example:
/*
HTML:
    <form method="GET">
        <input type="email" name="email" />
        <input type="submit" name="send" value="Send" />
    </form>
PHP:
*/
if(isset($_GET["send"])) {
    $filter = filter_input("GET", "email", FILTER_VALIDATE_EMAIL);// True(Email) | False(Otherwise)
    if($filter) {
        echo "Yes The Data is Email";
    } else {
        echo "Data is not Email";
    }
}
// The Diffrences Between filter_var & filter_input:
/*
الأول في حال لم يجد المتغير المرسل أي انك لم تعرف المتغير سيعطي خطأ
أما الثاني لا يعطي خطأ
*/
// New Values Used in filter_var
/*
Syntax:
filter_var(var, Filter, Flag{Optional})
Filter:
1 - FILTER_SANITIZE_EMAIL ===> Remove All Symobls Without Numbers|SpecialChars(@, .)
2 - FILTER_SANITIZE_NUMBER_FLOAT ===> Remove All Without Numbers And [ - + e ]
3 - FILTER_SANITIZE_NUMBER_INT ===> Remove All Without Numbers And [ - + e ]
4 - FILTER_SANITIZE_SPECIAL_CHARS ===> Transform All To String
5 - FILTER_SANITIZE_URL ===> Remove All Without Anything Related With <URL>
Flags: ( Only With Numbers )
1 - FILTER_FLAG_ALLOW_FRACTION ===> Allow .
2 - FILTER_FLAG_ALLOW_THOUSAND ===> Allow ,
3 - FILTER_FLAG_ALLOW_SCIENTIFIC ===> Allow e E
*/
// Example:
$ex = filter_var("abd^6@gmail.com", FILTER_SANITIZE_EMAIL);
echo $ex;// Return Value Not Boolean

// Lesson 22
// Date & Time
// Example:
$date = date("Y m d");
$date = date("Y-m-d");
/*
Rules:
Y: Year 2025
y: Year 25
d: Day
m: Month
D: ثلاث أحرف من أسم اليوم
j: Number Of Day 1 ===> 31
l: Full Name Of Day
z: Day From Year 0 ===> 365
F: Full Name Of Month
M: ثلاث أحرف من الشهر
n: Number Of Months 1 ===> 12
t: Number Of Days In This Month
--------------------------------
H: Hour
i: Minute
s: Seconds
g: Hour 0 ===> 12
G: Hour 0 ===> 24
h: 00 ===> 12
H: 00 ===> 24
-----طريقة ضبط التاريخ الافتراضي------
date_default_timezone_set("The Date of Zone From PHP");
	Asia/Damascus ===> For Syria
*/
date_default_timezone_set("Asia/Damascus");
$date = date("Y-m-d");
echo $date;
?>