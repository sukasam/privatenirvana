<?php
    include_once('../include/app_top.php');

    if(isset($_GET['action']) && $_GET['action'] === 'sendContact'){

       if($_POST['subcode'] == $_POST['charChk']){
        $subname = $_POST['subname'];
        $subemail = $_POST['subemail'];
        $subsubject = $_POST['subsubject'];
        $submessage = $_POST['submessage'];
 
         $strTo = EMAIL_CONTACT;
         $strSubject = "=?UTF-8?B?".base64_encode($subsubject)."?=";
         $strHeader .= "MIME-Version: 1.0' . \r\n";
         $strHeader .= "Content-type: text/html; charset=utf-8\r\n"; 
         $strHeader .= "From: ".$subname."<".$subemail.">\r\nReply-To: ".$subemail;
         $strMessage = "<h3>".EN_CONTACT_US."</h3>";
         $strMessage += "Name: ".$subname."<br/>";
         $strMessage += "Email: ".$subname."<br/>";
         $strMessage += "Subject: ".$subname."<br/>";
         $strMessage += "Message: ".nl2br($submessage)."<br/>";
 
         $flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //
         // if($flgSend){
         //     echo "Email Sending.";
         // }
         // else{
         //     echo "Email Can Not Send.";
         // }
 
         echo "<script>alert('".EN_THANK_CONTACT_US."');window.location='".curPageURLWithoutParam()."'</script>;";
       }else{
         echo "<script>alert('".EN_SECU_CODE_ERRORS."');window.location='".curPageURLWithoutParam()."'</script>;";
       }

    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contact.css">
    <script src="js/form.js"></script>

    <script>
    function secCode(){
        var randomSec = Math.floor(10000 + Math.random() * 99999);
        document.getElementById("charChk").value = randomSec;
        document.getElementById("charRandom").innerHTML = randomSec;
    }
    </script>
</head>

<body onload="secCode();">

    <div class="primaryContainer" class="primaryContainer clearfix">

        <?php include("top_pg.php"); ?>

        <div class="port-banner-sect clearfix">
            <div class="port-baner-title clearfix">
                <p class="port-baner-txt">
                    Contact us<br />
                </p>
                <p class="port-baner-txt1">
                    For more information<br />
                </p>
            </div>
        </div>
        <div class="contact-info-sect clearfix">
            <p class="contact-info-title">
                Get in touch with us
            </p>
            <div class="contact-info-details clearfix">
                <div class="contact-info-left clearfix">
                    <div class="contact-info-ico clearfix">
                        <i class="icon icon-phone grd-color txt-56"></i>
                    </div>
                    <p class="contact-info-phone">
                        <span class="contact-info-phone-span">PHONE</span><br />Phone&#x3a; <?php echo $rowContact['contact_phone1'];?>, <br />Sales Dept. <?php echo $rowContact['contact_phone2'];?><br />Mobile&#x3a; <?php echo $rowContact['contact_phone3'];?>&nbsp;<br /> Fax&#x3a; <?php echo $rowContact['contact_phone4'];?><br />
                    </p>
                </div>
                <div class="contact-info-middle clearfix">
                    <div class="contact-info-ico1 clearfix">
                        <i class="icon icon-home2 grd-color txt-60"></i>
                    </div>
                    <p class="contact-info-adr">
                        <span class="contact-info-adr-txt">ADDRESS<br /></span><?php echo $rowContact['contact_name'];?><br /><?php echo $rowContact['contact_address'];?><br />
                    </p>
                </div>
                <div class="contact-info-right clearfix">
                    <div class="contact-info-ico2 clearfix">
                        <i class="icon icon-mail2 grd-color txt-56"></i>
                    </div>
                    <p class="contact-info-em">
                        <span class="contact-info-em-span">EMAIL</span><br />Email&#x3a;
                        <?php echo $rowContact['contact_email'];?><br />Website&#x3a; <?php echo $rowContact['contact_web'];?><br />
                    </p>
                </div>
            </div>
        </div>
        <div class="contact-form-sect clearfix">
            <p class="contact-form-title">
                <span class="textspan">Send us message</span><br />&nbsp; &nbsp; &nbsp; We would highly appreciate your
                voices, feedback, comments and suggestions. Do not hesitate to let us know.<br />
            </p>

            <form name="submitform" method="post" action="?action=sendContact">

                <div class="contact-form-input clearfix">

                    <div class="contact-input1 clearfix">

                        <label for="pn-name">Name</label>
                        <input id="pn-name" type="text" placeholder="Name Surename" name="subname" class="txt-16"
                            onkeyup="checkform()" pattern="[a-zA-Zก-ุฯ-๙\s]{5,32}"
                            oninvalclass="setCustomValidity('Card name must contain at between 5 - 30 characters (aA-zZ)')"
                            onchange="try{setCustomValidity('')}catch(e){}">


                    </div>

                    <div class="contact-input1 clearfix">

                        <label for="pn-email">Email</label>
                        <input id="pn-email" type="text" placeholder="your@email.com" name="subemail" class="txt-16"
                            onkeyup="checkform()" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                            oninvalclass="setCustomValidity('Card name must contain at between 5 - 30 characters (aA-zZ)')"
                            onchange="try{setCustomValidity('')}catch(e){}">

                    </div>

                    <div class="contact-input1 clearfix">

                        <label for="pn-subject">Subject</label>
                        <input id="pn-subject" type="text" placeholder="Your subject..." name="subsubject"
                            class="txt-16" onkeyup="checkform()" pattern="[a-zA-Zก-ุฯ-๙\s]{5,1000}"
                            oninvalclass="setCustomValidity('Card name must contain at between 5 - 30 characters (aA-zZ)')"
                            onchange="try{setCustomValidity('')}catch(e){}">

                    </div>

                    <div class="contact-input1 clearfix">

                        <label for="pn-message">Message</label>
                        <textarea id="pn-message" rows="4" cols="50" name="submessage"
                            placeholder="Enter your text here ..."></textarea>

                    </div>

                    <div class="contact-input1 clearfix">

                        <label for="pn-code">Security Code</label>
                        <input id="pn-code" type="text" placeholder="xxxxx" name="subcode" class="txt-16" maxlength="5"
                            onkeyup="checkform()" pattern="[0-9]{5}"
                            oninvalclass="setCustomValidity('Card name must contain at between 5 - 30 characters (aA-zZ)')"
                            onchange="try{setCustomValidity('')}catch(e){}">
                            
                            <div id="charRandom" class="contact-send-btn secure-code checked"></div>
                            <input type="hidden" id="charChk" name="charChk" value="">
                    </div>



                    <div class="contact-input1 clearfix">

                        <input id="submitbutton" type="submit" value="Send Message"
                            class="contact-send-btn submit_btn checked">

                    </div>

                </div>
        </div>
        </form>


        <!--<div class="contact-location-map clearfix">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.5626193492094!2d100.62144981483104!3d13.805219990312882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d62769e597ce1%3A0xe02984b885c434cf!2sPrivate+Nirvana+Residence!5e0!3m2!1sen!2sth!4v1548583645397" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>-->

        <?php include("footer_pg.php"); ?>

    </div>
</body>

</html>