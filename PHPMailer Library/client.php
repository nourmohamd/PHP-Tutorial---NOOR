<?php
    // Client Settings
    require_once "./server.php";
    $mail->setFrom("abdonoor684@gmail.com", "Mohamed Nour Abdo");
    $mail->addAddress("mnoorhamad1234@gmail.com");
    $mail->Subject = "Title 1";
    $mail->Body = "HTML + CSS";
    $mail->send();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    // For Translate File To Gmail Application
    // $mail->addAttachment("path/"."file", "new.extenssion"); ===> Translate File By New Name To Gmail
?>