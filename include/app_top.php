<?php
    error_reporting(0);
    include_once('connect.php');
    include_once('function.php');
    date_default_timezone_set("Asia/Bangkok");

    $rowContact = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM s_contact_us WHERE id=1"),MYSQLI_ASSOC);

    //GLOBAL
    define("EMAIL_CONTACT",$rowContact['contact_email']);
    
    /// ENG 
    define("EN_THANKS_SUBSCIBE","Thank you for subscribing to our newsletter");
    define("EN_CONTACT_US","Contact US (private-nirvana.com)");
    define("EN_THANK_CONTACT_US","We have received your message and would like to thank you for writing to us");
    define("EN_SECU_CODE_ERRORS","Security code is invalid");
    
    
    /// THA
    define("TH_THANKS_SUBSCIBE","ขอบคุณสำหรับการสมัครรับจดหมายข่าวของเรา");
    define("TH_CONTACT_US","ติดต่อเรา (private-nirvana.com)");
    define("TH_THANK_CONTACT_US","เราได้รับข้อความของคุณแล้วและขอขอบคุณสำหรับการเขียนถึงเรา");
    define("TH_SECU_CODE_ERRORS","รหัสความปลอดภัยไม่ถูกต้อง");
?>