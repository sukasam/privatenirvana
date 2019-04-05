<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contact.css">
    <script src="js/form.js"></script>


</head>

<body>

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
                ติดต่อกับเรา
            </p>
            <div class="contact-info-details clearfix">
                <div class="contact-info-left clearfix">
                    <div class="contact-info-ico clearfix">
                        <i class="icon icon-phone grd-color txt-56"></i>
                    </div>
                    <p class="contact-info-phone">
                        <span class="contact-info-phone-span">ติดต่อ</span><br />โทร&#x3a; &#x2b;66 &#x28;0&#x29; 2538
                        4884, <br />ฝ่ายขาย &#x2b;66 &#x28;0&#x29; 2538 3883<br />มือถือ&#x3a; &#x2b;66
                        &#x28;0&#x29;8 1984 7554&nbsp;<br /> แฟ็กซ์&#x3a; &#x2b;66 &#x28;0&#x29; 2538 4883<br />
                    </p>
                </div>
                <div class="contact-info-middle clearfix">
                    <div class="contact-info-ico1 clearfix">
                        <i class="icon icon-home2 grd-color txt-60"></i>
                    </div>
                    <p class="contact-info-adr">
                        <span class="contact-info-adr-txt">ที่อยู่<br /></span>บริษัท ไพรเวท เนอวานา จำกัด<br />เลขที่ 8
                        ซอยโยธินพัฒนา 11 แยก 7 แขวงคลองจั่น เขตบางกะปิ กรุงเทพฯ 10240<br />
                    </p>
                </div>
                <div class="contact-info-right clearfix">
                    <div class="contact-info-ico2 clearfix">
                        <i class="icon icon-mail2 grd-color txt-56"></i>
                    </div>
                    <p class="contact-info-em">
                        <span class="contact-info-em-span">อีเมล์</span><br />อีเมล์&#x3a;
                        privatenirvana&#x40;private-nirvana.com<br />เว็บไซต์&#x3a; www.private-nirvana.com<br />
                    </p>
                </div>
            </div>
        </div>
        <div class="contact-form-sect clearfix">
            <p class="contact-form-title">
                <span class="textspan">ส่งข้อความถึงเรา</span><br />&nbsp; &nbsp; &nbsp; ขอขอบคุณท่านลูกค้า
                หากสนใจโครงการของเรา หรือมีข้อติชมโปรดส่งข้อความเสนอแนะเราได้ที่นี่<br />
            </p>

            <form name="submitform">

                <div class="contact-form-input clearfix">

                    <div class="contact-input1 clearfix">

                        <label for="pn-name">ชื่อ</label>
                        <input id="pn-name" type="text" placeholder="Name Surename" name="subname" class="txt-16"
                            onkeyup="checkform()" pattern="[a-zA-Zก-ุฯ-๙\s]{5,32}"
                            oninvalclass="setCustomValidity('Card name must contain at between 5 - 30 characters (aA-zZ)')"
                            onchange="try{setCustomValidity('')}catch(e){}">


                    </div>

                    <div class="contact-input1 clearfix">

                        <label for="pn-email">อีเมล​์</label>
                        <input id="pn-email" type="text" placeholder="your@email.com" name="subemail" class="txt-16"
                            onkeyup="checkform()" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                            oninvalclass="setCustomValidity('Card name must contain at between 5 - 30 characters (aA-zZ)')"
                            onchange="try{setCustomValidity('')}catch(e){}">

                    </div>

                    <div class="contact-input1 clearfix">

                        <label for="pn-subject">หัวข้อเรื่อง</label>
                        <input id="pn-subject" type="text" placeholder="Your subject..." name="subsubject"
                            class="txt-16" onkeyup="checkform()" pattern="[a-zA-Zก-ุฯ-๙\s]{5,1000}"
                            oninvalclass="setCustomValidity('Card name must contain at between 5 - 30 characters (aA-zZ)')"
                            onchange="try{setCustomValidity('')}catch(e){}">

                    </div>

                    <div class="contact-input1 clearfix">

                        <label for="pn-message">ข้อความ</label>
                        <textarea id="pn-message" rows="4" cols="50" name="submessage"
                            placeholder="Enter your text here ..."></textarea>

                    </div>

                    <div class="contact-input1 clearfix">

                        <label for="pn-code">รหัสความปลอดภัย</label>
                        <input id="pn-code" type="text" placeholder="xxxxx" name="subcode" class="txt-16" maxlength="5"
                            onkeyup="checkform()" pattern="[0-9]{5}"
                            oninvalclass="setCustomValidity('Card name must contain at between 5 - 30 characters (aA-zZ)')"
                            onchange="try{setCustomValidity('')}catch(e){}">

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