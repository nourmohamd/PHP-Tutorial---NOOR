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
*/

?>