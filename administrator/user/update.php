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
			$sql = "select * from $tbl_name where username = '$_POST[username]' ";
			$query = mysqli_query($conn,$sql);
			if(mysqli_num_rows($query) == 0) {
				include "../include/m_add.php";
				header ("location:index.php?" . $param); 
			}else{
				$username = $password = "";
				$msg_user=1;				
			}
		}
//-------------------------------------------------------------------------------------------------------------------------------------
		if ($_POST['mode'] == "update" ) { 	
			$sql = "select * from s_user where username = '$_POST[username]' and user_id <> '$_POST[$PK_field]' ";
			$query = mysqli_query ($conn,$sql);
			if (mysqli_num_rows($query) == 0) { //====> Username Avalible 
					$rec = mysqli_fetch_array ($query);		
					if($_POST['new_p']<>""){$_POST['password']=$_POST['new_p'];	}
					include "../include/m_update.php";
					header ("location:index.php?" . $param); 
			}else{
					$msg_user=1;
			}
	}
}
//-------------------------------------------------------------------------------------------------------------------------------------
	if ( ($_GET['mode'] == "add") && (count($_POST) == 0)) { 
		 Check_Permission ($conn,$check_module,$_SESSION['login_id'],"add");
	}
//-------------------------------------------------------------------------------------------------------------------------------------
	if ( ($_GET['mode'] == "update") && (count($_POST) == 0) ) { 
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
		if (frm.name.value.length==0){
			alert ('กรุณาระบุ ชื่อ-สกุล');
			frm.name.focus(); return false;
		}
		if (frm.username.value.length==0){
			alert ('กรุณาระบุ username');
			frm.username.focus(); return false;
		}
		if (frm.password.value.length==0){
			alert ('กรุณาระบุ password');
			frm.password.focus(); return false;
		}
		if (frm.password.value.length<4){
			alert ('กรุณาระบุ password มากกว่า 4 ตัวอักษร');
			frm.password.focus(); return false;
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
<UL class=shortcut-buttons-set>
  <LI><A class=shortcut-button href="javascript:history.back()"><SPAN><IMG  alt=icon src="../images/btn_back.gif"><BR>Back</SPAN></A></LI>
</UL>
<!-- End .clear -->
<DIV class=clear></DIV><!-- End .clear -->
<DIV class=content-box><!-- Start Content Box -->
<DIV class=content-box-header align="right">

<H3 align="left"><?php  echo ucfirst ($page_name); ?></H3>
<DIV class=clear>
  
</DIV></DIV><!-- End .content-box-header -->
<DIV class=content-box-content>
<DIV id=tab1 class="tab-content default-tab">
  <form action="update.php" method="post"  name="form1" id="form1"   onSubmit="return check(this)">
    <div class="formArea">
      <fieldset>
        <legend><?php  echo ucfirst ($page_name); ?></legend>
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
          <tr>
            <td><table class="formFields" cellspacing="0" width="100%">
              <tr >
                <td class="name">Name <span class="required">*</span></td>
                <td><input name="name" type="text" id="name"  value="<?php  echo $name; ?>" style="width:200px;"></td>
              </tr>
              <tr >
                <td class="name">Username <span class="required">*</span></td>
                <td><input name="username" type="text" id="username"  value="<?php  echo $username; ?>"  style="width:200px;"></td>
              </tr>
              <?php  if ($_REQUEST['mode'] == "add") { ?>
              <tr >
                <td class="name">Password <span class="required">*</span></td>
                <td><input name="password" type="password" id="password" value="<?php  echo $password;?>"  style="width:200px;"></td>
              </tr>
              <?php  } ?>
              <?php  if ($_REQUEST['mode'] == "update") { ?>
              <tr >
                <td class="name">Old password</td>
                <td>*****
                  <input type="hidden" name="password" id="password" value="<?php  echo $password;?>"></td>
              </tr>
              <tr >
                <td class="name">New password</td>
                <td><input name="new_p" type="password" id="new_p"  style="width:200px;"></td>
              </tr>
              <?php  } ?>
              <!--
              <tr >
                <td class="name">Super admin</td>
                <td><input name="admin_flag" type="checkbox" id="admin_flag" value="1" <?php  if($admin_flag == 1) echo "checked";?>></td>
              </tr>
              -->
              <tr >
                <td class="name">&nbsp;</td>
                <td><input type="submit" name="Submit" value="Submit" class=button>
                  <input type="reset" name="Submit" value="Reset" class=button>
                  <?php  
			$a_not_exists = array();
			post_param($a_param,$a_not_exists); 
			?>
                  <input name="mode" type="hidden" id="mode" value="<?php  echo $_REQUEST['mode'];?>">
                  <input name="<?php  echo $PK_field;?>" type="hidden" id="<?php  echo $PK_field;?>" value="<?php  echo $_REQUEST[$PK_field];?>"></td>
              </tr>
            </table></td>
          </tr>
        </table>
      </fieldset>
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
