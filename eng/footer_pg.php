<?php
    include_once('../include/app_top.php');
?>
<div class="pn-footer-part clearfix">
            <div class="pn-footer-sect clearfix">
                <div class="pn-footer-info clearfix">
                    <div class="pn-subscribe-sect clearfix">
                        <p class="pn-subscribe-sect-txt">
                        Email Subscribe<br />
                        </p>
                        <form name="subscribeform">
                        <div class="pn-subscribe-input clearfix">
                            <div class="pn-subscribe-field clearfix">
                            <input id="subscribe-email" type="text" placeholder="your@email.com" name="subscribeemail" class="txt-16" onkeyup="checksubscribe()" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                    oninvalclass="setCustomValidity('Card name must contain at between 5 - 30 characters (aA-zZ)')"
                    onchange="try{setCustomValidity('')}catch(e){}">
                            </div>
                            <input id="subscribe" type="submit" value="Submit" class="pn-subscribe-submit-txt subscribe_btn checked">
                        </div>
                    </form>
                    </div>
                    <div class="pn-address clearfix">
                        <p class="pn-address-txt">
                        <?php echo $rowContact['contact_name'];?><br />
                        </p>
                        <p class="pn-address-details">
                        <?php echo $rowContact['contact_address'];?><br /><br />Phone&#x3a; <?php echo $rowContact['contact_phone1'];?><br />Sales Dept&#x3a; <?php echo $rowContact['contact_phone2'];?><br />Mobile&#x3a; <?php echo $rowContact['contact_phone3'];?><br />Fax&#x3a; <?php echo $rowContact['contact_phone4'];?><br /><br /><span id="textspan1"><?php echo $rowContact['contact_email'];?></span><br />
                        </p>
                        <div class="pn-social-sect clearfix">
                            <div class="pn-social-group clearfix">
                            <a href="tel:<?php echo $rowContact['contact_phone1'];?>"><img class="pn-social-ico1 image" src="img/phone_ico.png" /></a>
                                <a href="<?php echo $rowContact['facebook'];?>" target="_blank"><img class="pn-social-ico2 image" src="img/fb_ico.png" /></a>
                                <a href="<?php echo $rowContact['instagram'];?>" target="_blank"><img class="pn-social-ico3 image" src="img/ig_ico.png" /></a>
                                <a href="<?php echo $rowContact['googlemap'];?>" target="_blank"><img class="pn-social-ico4 image" src="img/pin_ico.png" /></a>
                            </div>
                            <p class="pn-copyright-txt">
                            &copy; <?php echo date('Y');?> Private Nirvana. All Right Reserved.<br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pn-footer-end clearfix">
            </div>
        </div>
