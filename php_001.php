<?php
// 1 - Comments

/* 
 Multi Comments
*/

// Single Comments

# Single Comments

// الترويسة الأساسية في لغة البي اتش بي
/*  
    <?php 
    ?>
*/
/*
1 - Go C:/Xampp Then Go to htdocs
2 - Create Folder Of Project
3 - Create File Of PHP Such As index.php << Default The Best>>
    4 - For Play File Open Xampp and Start Apache And MySQL
    5 - Go To Chrome And Put : localhost/folder/index.php
    */
    ?>

    <?php
// 2 - Print Statement
echo "Hello PHP!";
echo "There is no error!!";

// 3 - DataType && Variables
// String Boolean Integer Float|Double Null Array Object
// Build Variable : $nameOfVariable = Value;
$num1 = 10;
$num2 = 20;
echo $num1 + $num2;
// We Can Use HTML With PHP

// 4 - Functions For Check About Variable Type And Returns :
// 0 ===> False
// 1 ===> True
/*
is_string($var)
is_bool($var)
is_float($var)
is_integer($var)
is_numeric($var)
is_null($var)
is_array($var)
is_object($var)
*/
$bool1 = is_string($num1);
echo $bool1;
// في بعض الحالات جملة الطباعة تستعصي مع المتغيرات لذلك دائماً استخدم المتحول التالي
// var_dump($var);
var_dump($bool1); // ===> bool(false)

// 5 - String's Functions
/*
1 - strlen(String) ===> Length Of String
2 - str_word_count(String) ===> Count Of Word In String
3 - strrev(String) ===> Reverse The String
4 - strpos(String, "Text") ===> Return The Index Of Text In String
5 - str_replace("OldText", "NewText", String) ===> Replace OldText With NewText In String
6 - trim(String) ===> Remove Spaces From Left And Right In String
7 - ltrim(String) ===> From Left
7 - rtrim(String) ===> From Right
*/

// 6 - Arithmetic Operators
/* + - * / % ** */

// 7 - Compound Assignment
// $a = $a + $b ===> $a += $b
/*
$a += $b
$a -= $b
$a *= $b
$a /= $b
$a **= $b
$a %= $b

// 8 - If Condition And Else
/*
1 -
    if () {}
2 - 
    if () {} else {}
3 -
    if(){
    }
    else if() {
    }
    ....
    else {
    }
4 - Conditional ( Ternary ) Operator
Syntax: (condition) ? (expression_if_true) : (expression_if_false);
*/
// Example :
$age = 18;
$message = ($age >= 18) ? 'You are an adult.' : 'You are a minor.';
echo $message;
// The Condition Can Equal : < > <= >= == === !== != <>

// 9 - Logical Operators
/*
    And &&
    Or ||
    Not !
    xor ===> Not Equal 1 , Equal 0 
*/
$num3 = 19;
$num2 = 0;
if($num3 && $num2) {
    echo "Yes";
}

// 10 - Switch
// Such As If Condition
$key = 2;
switch($key) {
    case 1: echo "1";
    break;
    case 2: echo "2";
    case 3: echo "3";
    break;
    case 4: echo "4";
    break;
    default: echo "Nothing";
    break;
}

// 11 - Concatination
// يستخدم لربط السلاسل النصية مع بعضها
/*
 1 - $a = "Mohamed" . " " . "Nour";
 2 - 
    $a = "Mohamed";
    $a .= " Nour";
*/
// Example :
$a = "Mohamed";
$a .= " Nour";
echo $a;
// Note: ملف ال بي اتش بي يكون متصل مع بعضه ضمنياً ولو كثُرت السكربتات

// 12 - Loops
// 1 - While() {}
/*
Syntax :
    $i = 0;
    while($i<10) {
        ...Statement
        $i++;
    }
*/
// 2 - Do While Loop() {}
// Excutes One On Least
/*
Syntax :
    $i=0;
    do {
    ...Statement
    $i++;
    } while($i<10);
*/
// 3 - For Loop () {}
/*
for($i=0;$i<10;$i++) {
    ...Statement
}
*/
// Break & Continue
// Example:
for($i=0;$i<10;$i++) {
    if($i === 5) 
        break;
}
for($i=0;$i<10;$i++) {
    if($i === 5) 
        continue;
}

// Lesson 13
// GET & POST Sends ===> Public & Private
// Form + GET | POST ===> Send | Recive
// Variable1: $_GET["nameOfInput"] | $_POST["nameOfInput"] ===> For Get Data
// isset(Variable1) ===> For Check About Variable is Clicked Or No
//  True | False
// يمكنك وضع رابط ملف بي اتش بي ثاني في ميزة الأكشن وعند النقر يحولك ويحول المتغيرات إلى ذلك الرابط
/*
    Example 1:----------------
    HTML :
    <form method="GET">
        <input type="email" name="email" id="email" required>
        <input type="submit" name="send" value="Login">
    </form>
    PHP :
    if(isset($_GET["send"])) {
        echo $_GET["email"];
    }
    Example 2:-----------------
    HTML :
    <form method="GET" action="login.php">
        <input type="email" name="email" id="email" required>
        <input type="submit" name="send" value="Login">
    </form>
    PHP (login.php) :
    if(isset($_GET["email"]) {
        echo $_GET["email"];
    }
    After Send The URL IS :
    http://localhost/try/login.php?email=abdonoor684%40gmail.com
*/
?>