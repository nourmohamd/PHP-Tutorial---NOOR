<?php
// Lesson 27
// mPDF is a PHP library which generates PDF files from UTF-8 encoded HTML.
// https://github.com/mpdf/mpdf ===> URL For MPdf Library
// PHP 8.0 is supported since mPDF v8.0.4
// Installation : 
// cmd ===> Select Directory ===> composer require mpdf/mpdf v8.0.4
// Versions:
/*
    PHP >=5.6 <7.3.0 is supported for mPDF >= 7.0
    PHP 7.3 is supported since mPDF v7.1.7
    PHP 7.4 is supported since mPDF v8.0.4
    PHP 8.0 is supported since mPDF v8.0.10
    PHP 8.1 is supported as of mPDF v8.0.13
    PHP 8.2 is supported as of mPDF v8.1.3
    PHP 8.3 is supported as of mPDF v8.2.1
    PHP 8.4 is supported as of mPDF v8.2.5
*/
// The Main Code For Mpdf
/*
<?php
    require_once __DIR__ . 'vendor/autoload.php';
    // Create Object From Mpdf
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML('<h1>Hello world!</h1>');
    $mpdf->Output();
?>
// For Use CSS And HTML In Mpdf Library File:
1 - $stylesheet = file_get_contents('style.css');
2 - $html = "HTML Files";
3 - $mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
4 - $mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);
*/
// For Make Download PDF Auto When User Open Website :
// $mpdf->Output("name.pdf", "D"); // Auto Download When Open Website
// $mpdf->Output("name.pdf", "I"); // Send Request For Chrome for open pdf
// For Make PDF Portrait or Landscape :
// $mpdf->AddPage("L" | "P"); ===> Put This Rules After Direct << $mpdf = new \Mpdf\Mpdf(); >>
// For Select Width And Height For PDF : Build Object Such as
// $mpdf = new \Mpdf\Mpdf(["mode" => "utf-8", "format" => [290, 150]]);
/*
Full Example:
<?php
    require_once __DIR__ . "/vendor/autoload.php";

    // Create Object Mpdf
    $mpdf = new \Mpdf\Mpdf(["mode" => "utf-8", "format" => [200, 300]]); // Size: Width, Height

    // For Support Arabic Language
    $mpdf->autoScriptToLang = true;
    $mpdf->autoLangToFont = true;

    // For Make Page Landscape | Portrait
    $mpdf->AddPage("L" | "P");

    // CSS
    $css = file_get_contents("style.css");
    $mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);

    // HTML
    $html = "<h1>Mohamed Nour Abdo</h1>";
    $mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);

    // Output
    $mpdf->Output();
    $mpdf->Output("myPdf.pdf", "D"|"I");
?>
*/

// Lesson 28
// Files System in PHP :
// For Use Files Variable You Should To Write This Attribute For Form Element :
// <form method="POST" enctype="multipart/form-data">
// <input type="file" name="img" accept="image/*">
// <input type="submit" name="Upload" value="Download Image">
// </form>
// Methods For Files Variables
// 1 - $_FILES["nameOfField"]["name"] ===> For Print [ NameAnd.Extenssion ] Of File
// 2 - $_FILES["nameOfField"]["tmp_name"] ===> For Return Path Of File Uploadation
// 3 - move_uploaded_file($_FILES["nameOfField"]["tmp_name"], "path begin project".$_FILES["nameOfField"]["name"])
// move_uploaded_file($_FILES["img"]["tmp_name"], 'img/'.$_FILES["img"]["name"]); ===> For Storage File In Path You Selected It
// 4 - $_FILES["nameOfField"]["size"] ===> For Knowing Size Of File (Byte, KiloByte/1024, MigaByte/1024/1024)
// 5 - $_FILES["nameOfField"]["type"] ===> For Return Type Of File
// 6 - file_exists("path"."nameOfFile.extenssion"); ===> For Check If File Found Or No ( 1<Found> | 0<Not Found> )
// Example:
if(file_exists("images/",$_FILES["file"]["name"]) === false) {
    move_uploaded_file($_FILES["file"]["name_tmp"], "images/".$_FILES["file"]["name"]); // Upload File
}
// 7 - unlink("Path" . "Name Of File" | $_FILES["file"]["name"]) ===> Remove File From Server
// Example:
if(isset($_POST["send"])) {
    unlink("img/" . "Map.png");
}

?>