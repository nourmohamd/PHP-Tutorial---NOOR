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
?>