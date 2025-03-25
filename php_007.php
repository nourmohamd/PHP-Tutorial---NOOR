<?php
// Lesson 35
// Create API in PHP
/*
For Create API We Need To Put This Rules:
URL For Learn API In PHP: https://developer.okta.com/blog/2019/03/08/simple-rest-api-php
--------------------------------------
1 - header("Access-Control-Allow-Origin: *); ===> جميع المواقع يمكنها استخدام هذا الاي بي اي
اذا كنت تريد عدم السماح لموقع معين بالمشاركة يمكنك وضع فقط رابط الموقع الذي تريد السماح له
2 - header("Content-Type: application/json; charset = UTF-8"); ===> لدعم اللغة العربية
3 - header("Access-Control-Allow-Methods: * | GET | POST"); ===> تحديد طرق الوصول للاي بي اي
4 - header("Access-Control-Max-Age: 3600");
5 - header("Access-Control-Allow-Header: *");
--------------------------------------
// Example:
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
*/
// Lesson 36
// API ===> GET
/*
1 - Write in PHP File
===PHP===
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$data = ["username" => "Mohamed Nour", "age" => 24];
$json_data = json_encode($data);
print_r($json_data);
2 - Write in JS File
===JS===
fetch("file.php").
then(
    (res) => {console.log(res.json())};
)
.catch(
    (rej) => {console.log(rej)};
);
Note: You Can Use Variables With URL Of API Such As
http://localhost/code/server.php?username=mohamednour&key=123456
يمكنك استقبال هذه المتغيرات وعمل شيك عليها اذا بدك والكثير من الأمور الأخرى
*/
// Lesson 37
// API ===> POST
/*
Client Sends Data To API Server
1 - Write in PHP File
===PHP===
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$receive = file_get_contents("php://input");
// You Should To Send Response As JSON
$response = json_encode(array("message" => "Success"));
print_r($response);
2 - Write in JS File
===JS===
let data = {"name":"Nour", "age": 22};
fetch("file.php", {
    body: JSON.stringify(data),
    method: 'POST',
    headers : {"Content-Type": "appilcation/json"},
})
.then (
    (respons) => { return resonse.json(); }
)
.then(
    (data) => { console.log(data); }
)
.catch(
    (rej) => { console.log(rej); }
)
*/
// Lesson 38
// htaccess ===> مكتبة ضخمة ولكننا سندرس منها القسم المرتبط بعنوان اليو ار ال
// URL ===> https://alexcican.com/post/how-to-remove-php-html-htm-extensions-with-htaccess/
// لكي نصل إلى الملفات دون كتابة اللاحقة أكتب التعليمات التالية في ملف منفصل
// .htaccess
// عندما تضع هذا الملف سيتمكن من تطبيق القواعد على الملفات والمجلدات الفرعية والملفات الفرعية المجاورة لها
// 1 - For Remove .php
/*
Options +MultiViews
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^([^\.]+)$ $1.php [NC,L]
*/
// 2 - For Remove .html
/*
Options +MultiViews
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^([^\.]+)$ $1.html [NC,L]
*/
// 3 - For Don't Know Extenssion Of File Write:
/*
RewriteCond %{THE_REQUEST} "^[^ ]* .*?\.php[? ].*$"
RewriteRule .* - [L,R=404]

RewriteCond %{THE_REQUEST} "^[^ ]* .*?\.html[? ].*$"
RewriteRule .* - [L,R=404]
*/
?>