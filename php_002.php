<?php
// Lesson 14
// include & require & include_once & require_once
// الفرق بينهم هو
// include ===> يضمن ملف داخل ملف اخر ولكن في حال وجود خطأ يعطي تحذير ويكمل التنفيذ طبيعي
// require ===> يضمن ملف داخل ملف اخر ولكن في حال وجود خطأ يعطي تحذير وخطأ ويتوقف التنفيذ
// include_once ===> يبحث على هناك عملية تضمين سابقة إذا اي لا يضمن إذا لا يضمن ====> With include | include_once
// require_once ===> يبحث على هناك عملية تضمين سابقة إذا اي لا يضمن إذا لا يضمن ====> With require | require_once
// Example :
require "header.php";
include "main.php";
require "footer.php";

// Lesson 15
// What is An Array ?

// Way 1 To Create Array
$arr1 = array(1, 2, 3, 4);
// Way 2 To Create Array << Short Way >>
$arr2 = [1, 2, 3, 4];
// Accessing To Element
echo $arr1[0];
echo $arr1[1];
echo $arr1[2];
echo $arr1[3];
// Count($nameOfArray) Function For Get Size Of Array ...
echo count($arr1);

// By For Loop
for($i=0;$i < count($arr2); $i++) {
    echo "<p>";
    echo $i . " : " .$arr2[$i];
    echo "</p>";
}

// By ForEach
foreach($arr2 as $x) {
    echo $x;
}
// The Diffrences Between For And ForEach Is:
// For ===> Show index $i , value $arr[$i]
// ForEach ===> Show Value Only $x

// Array Be Key => Value
$arr3 = ["username" => "Mohamed Nour", "age" => 23, "birthday" => "2001-12-9"];
$arr4 = array("username" => "Mohamed Nour", "age" => 23, "birthday" => "2001-12-9");
$arr5;
$arr5["username"] = "Khaled";
// Print By For | Echo
echo $arr3["username"];// Mohamed Nour
foreach($arr4 as $key => $value) { 
    echo $key . " => " . $value;
}

// Nested Arrays
// كل حد في المصفوفة عبارة عن كائن لحالو له صفاته
$arr6 = [
    ["username" => "Mohamed Nour", "age" => 23, "birthday" => "2001-12-9"],
    ["username" => "Nour", "age" => 25, "birthday" => "2005-12-9"],
    ["username" => "Mohamed", "age" => 21, "birthday" => "2007-12-9"]
];
echo $arr6[1]["username"];// Nour
foreach($arr6 as $arr) {
    echo $arr["username"];
    echo $arr["age"];
    echo $arr["birthday"];
}

// Lesson 16
// The Header And Why We Need It ?
// 1 - header("location: url | file.php");
// 2 - header("refresh: numberOfSecond; url=url | file.php");

// Lesson 17
// The Functions
// 1 - Return Value Function
// 2 - Print Value Function
// Example:
function print_Hi() {
    echo "Hi Everyone";
}
print_Hi();

// Lesson 18
// Sessions - جلسات
/*
1 - session_start() ===> For Start The Session
2 - session_unset() ===> For Remove All Variables Of Session
3 - session_destroy() ===> For Destructed Session
4 - $_SESSION["KeyName"] = Value;
Note: Execute session_start() in Every Page You want to use session variables
function empty: empty(variable) ===> Return True< Variable Exists > | False< Variable Not Exists >
*/
?>