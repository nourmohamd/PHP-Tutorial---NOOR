<?php
// Lesson 23
// Type Server Variables
/*
$_SERVER["PHP_SELF"] ===> يرجع اسم الملف مع اسم المجلد الذي يتواجد ضمنها
$_SERVER["SCRIPT_FILENAME"] ===> يرجع مسار كامل للملف بدءً من القرص سي
$_SERVER["REQUEST_METHOD"] ===> GET | POST
$_SERVER["QUERY_STRING"] ===> Required With Form ( It Return URL AND Variable In That URL )
// Example:
<form action="" method="GET">
        <input type="tel" name="e" id="">
        <input type="submit" value="S" name="s">
</form>
<?php
    if(isset($_GET["s"]))
        echo $_SERVER["QUERY_STRING"];// e=123&s=S
?>

$_SERVER["SERVER_NAME"] ===> Name Of Domain Youtube, Facebook, ...
$_SERVER["SERVER_ADDR"] ===> Number Of IP For This Device
$_SERVER["REMOTE_ADDR"] ===> Number Of IP For Place You Use Internet in it
*/

// Lesson 24
// Encode IN PHP
// md5(Data) ===> For Encode
// sha1(Data) ===> For Encode But Stronger Than md5
// Example:
$text = "M";
$encode1 = md5($text);
$encode2 = sha1($text);
echo $text;
echo $encode1;
echo $encode2;

// Lesson 25
// New Method
/*
1 - explode("Separetor", String); ===> Convertation String To Array
2 - implode($array) ===> Convertation Array To String
3 - strcmp(Str1, Str2) ===> For Compare Between Two Strings
*/

// Lesson 26
// Composer ===> Tool For Include Libraries in PHP Language
// Download Composer And Download XAMPP 7.4.1 for <<Compatibility>>
    // Open CMD ===> Write ===> composer require nameOfLaibrary
    ?>