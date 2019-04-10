<?php 
error_reporting(0);
error_reporting(~E_NOTICE);	
	include ("../../include/config.php");
	include ("../../include/connect.php");
	include ("../../include/function.php");
	include ("config.php");

	if ($_POST['mode'] <> "") { 
		$param = "";
		$a_not_exists = array();
		$param = get_param($a_param,$a_not_exists);

		if ($_POST['mode'] == "add") { 
			include "../include/m_add.php";
			header ("location:index.php?" . $param); 
		}
		if ($_POST['mode'] == "update" ) { 
			include ("../include/m_update.php");
			header ("location:index.php?" . $param); 
		}
	}
	if ($_GET['mode'] == "add") { 
		 Check_Permission ($conn,$check_module,$_SESSION['login_id'],"add");
	}
	if ($_GET['mode'] == "update") { 
		 Check_Permission ($conn,$check_module,$_SESSION['login_id'],"update");
		$sql = "select * from $tbl_name where $PK_field = '" . $_GET[$PK_field] ."'";
		$query = mysqli_query ($conn,$sql);
		while ($rec = mysqli_fetch_array ($query)) { 
			$$PK_field = $rec[$PK_field];
			foreach ($fieldlist as $key => $value) { 
				$$value = $rec[$value];
			}
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE><?php  echo $s_title;?></TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<LINK rel=stylesheet type=text/css href="../css/reset.css" media=screen>
<LINK rel=stylesheet type=text/css href="../css/style.css" media=screen>
<LINK rel=stylesheet type=text/css href="../css/invalid.css" media=screen>
<SCRIPT type=text/javascript src="../js/jquery-1.3.2.min.js"></SCRIPT>
<SCRIPT type=text/javascript src="../js/simpla.jquery.configuration.js"></SCRIPT>
<SCRIPT type=text/javascript src="../js/facebox.js"></SCRIPT>
<SCRIPT type=text/javascript src="../js/jquery.wysiwyg.js"></SCRIPT>
<META name=GENERATOR content="MSHTML 8.00.7600.16535">
<script>
function confirmDelete(delUrl,text) {
  if (confirm("Are you sure you want to delete\n"+text)) {
    document.location = delUrl;
  }
}
//----------------------------------------------------------
function check(frm){
		if (frm.module_name.value.length==0){
			alert ('Please enter module name !!');
			frm.module_name.focus(); return false;
		}		
}	
</script>
</HEAD>
<?php  include ("../../include/function_script.php"); ?>
<BODY>
<DIV id=body-wrapper>
<?php  include("../left.php");?>
<DIV id=main-content>
<NOSCRIPT>
</NOSCRIPT>
<?php  include('../top.php');?>
<P id=page-intro><?php  if ($mode == "add") { ?>Enter new information<?php  } else { ?>Update  details	[<?php  echo $page_name; ?>]<?php  } ?>	</P>
<!-- <UL class=shortcut-buttons-set>
  <LI><A class=shortcut-button href="javascript:history.back()"><SPAN><IMG  alt=icon src="../images/btn_back.gif"><BR>Back</SPAN></A></LI>
</UL> -->
<!-- End .clear -->
<DIV class=clear></DIV><!-- End .clear -->
<DIV class=content-box><!-- Start Content Box -->
<DIV class=content-box-header align="right">

<H3 align="left"><?php  echo ucfirst ($check_module); ?></H3>
<DIV class=clear>
  
</DIV></DIV><!-- End .content-box-header -->
<DIV class=content-box-content>
<DIV id=tab1 class="tab-content default-tab">
  <form action="update.php" method="post" enctype="multipart/form-data" name="form1" id="form1"  onSubmit="return check(this)">
    <div class="formArea">
      <fieldset>
      <legend><?php  echo ucfirst ($page_name); ?> </legend>
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
          <tr>
            <td><table class="formFields" cellspacing="0" width="100%">
              <tr >
                <td class="name">Company Name <img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/></td>
                <td><input name="contact_name" type="text" id="contact_name"  value="<?php  echo $contact_name; ?>" size="60"></td>
              </tr>
							<tr >
                <td class="name">Company Name <img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/></td>
                <td><input name="contact_name_native" type="text" id="contact_name_native"  value="<?php  echo $contact_name_native; ?>" size="60"></td>
              </tr>
							<tr >
                <td class="name">Company Address <img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/></td>
                <td><input name="contact_address" type="text" id="contact_address"  value="<?php  echo $contact_address; ?>" size="80"></td>
              </tr>
							<tr >
                <td class="name">Company Address <img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/></td>
                <td><input name="contact_address_native" type="text" id="contact_address_native"  value="<?php  echo $contact_address_native; ?>" size="80"></td>
              </tr>
							<tr >
                <td class="name">Email</td>
                <td><input name="contact_email" type="text" id="contact_email"  value="<?php  echo $contact_email; ?>" size="80"></td>
              </tr>
							<tr >
                <td class="name">Website</td>
                <td><input name="contact_web" type="text" id="contact_web"  value="<?php  echo $contact_web; ?>" size="80"></td>
              </tr>
							<tr >
                <td class="name">Phone</td>
                <td><input name="contact_phone1" type="text" id="contact_phone1"  value="<?php  echo $contact_phone1; ?>" size="80"></td>
              </tr>
							<tr >
                <td class="name">Sales Dept</td>
                <td><input name="contact_phone2" type="text" id="contact_phone2"  value="<?php  echo $contact_phone2; ?>" size="80"></td>
              </tr>
							<tr >
                <td class="name">Mobile</td>
                <td><input name="contact_phone3" type="text" id="contact_phone3"  value="<?php  echo $contact_phone3; ?>" size="80"></td>
              </tr>
							<tr >
                <td class="name">Fax</td>
                <td><input name="contact_phone4" type="text" id="contact_phone4"  value="<?php  echo $contact_phone4; ?>" size="80"></td>
              </tr>
							<tr >
                <td class="name">Facebook</td>
                <td><input name="facebook" type="text" id="facebook"  value="<?php  echo $facebook; ?>" size="80"></td>
              </tr>
							<tr >
                <td class="name">Instagram</td>
                <td><input name="instagram" type="text" id="instagram"  value="<?php  echo $instagram; ?>" size="80"></td>
              </tr>
							<tr >
                <td class="name">Google Map</td>
                <td><input name="googlemap" type="text" id="googlemap"  value="<?php  echo $googlemap; ?>" size="80"></td>
              </tr>
							<tr >
                <td class="name"></td>
                <td></td>
              </tr>
          </table></td>
          </tr>
        </table>
        </fieldset>
    </div>
		<br/>
    <div class="formArea">
      <input type="submit" name="Submit" value="Submit" class="button">
      <input type="reset" name="Submit" value="Reset" class="button">
      <?php  
			$a_not_exists = array();
			post_param($a_param,$a_not_exists); 
			?>
      <input name="mode" type="hidden" id="mode" value="<?php  echo $_GET['mode'];?>">
      <input name="<?php  echo $PK_field;?>" type="hidden" id="<?php  echo $PK_field;?>" value="<?php  echo $_GET[$PK_field];?>">
    </div>
  </form>
</DIV>
</DIV><!-- End .content-box-content -->
</DIV><!-- End .content-box -->
<!-- End .content-box -->
<!-- End .content-box -->
<DIV class=clear></DIV><!-- Start Notifications -->
<!-- End Notifications -->

<?php  include("../footer.php");?>
</DIV><!-- End #main-content -->
</DIV>
<?php  if($msg_user==1){?>
<script language=JavaScript>alert('Username ซ้ำ กรุณาเปลี่ยน Username ใหม่ !');</script>
<?php  }?>
</BODY>
</HTML>
