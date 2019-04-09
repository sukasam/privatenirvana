<?php 

	include ("../../include/config.php");
	include ("../../include/connect.php");
	include ("../../include/function.php");
	include ("config.php");

	if ($_POST[mode] <> "") { 
		$param = "";
		$a_not_exists = array();
		$param = get_param($a_param,$a_not_exists);	
		$_POST['project_desc']=addslashes($_POST['project_desc']);
		$_POST['project_desc_native']=addslashes($_POST['project_desc_native']);
		//-------------------------------------------------------------------------------------
		if ($_POST[mode] == "add") {
			

			$_POST['status'] = 0;
			$_POST['sorts'] = '9999';
			$_POST['project_month'] = date("Y-m");
			
			include "../include/m_add.php";			
			$id=mysqli_insert_id($conn);

			$dirs = $id;
			
			 $sql = "update $tbl_name set sorts= '9999' where $PK_field = '$id' ";
			mysqli_query($conn,$sql);

			echo '<script type="text/javascript">
				window.location="index.php?mid=8";
			</script>';
		}

	

		//-------------------------------------------------------------------------------------
		if ($_POST[mode] == "update" ) { 
			
			$project_name = $_POST['project_name'];
			$project_name_old = $_POST['project_name_old'];
			
			$_POST['status'] = 0;
			$_POST['sorts'] = '9999';
		
			include ("../include/m_update.php");	
			
			$id=$_REQUEST['project_id'];
			
			
			echo '<script type="text/javascript">
                    	window.location="index.php?mid=8";
                    </script>';
		}
	}
	
	//--------------------------------------------------------------------------------
	if ($_GET[mode] == "add") { 
		 Check_Permission ($conn,$check_module,$_SESSION[login_id],"add");
	}
	//--------------------------------------------------------------------------------
	if ($_GET[mode] == "update") { 
		 Check_Permission ($conn,$check_module,$_SESSION[login_id],"update");
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
<script type="text/javascript" src="ajax.js"></script>

<META name=GENERATOR content="MSHTML 8.00.7600.16535">
<script>

 function manufch(){

	document.form1.subcat_id.options.length=0

	document.form1.subcat_id.options[0]=new Option("Choose Sub Catalog:", "Choose Sub Catalog:", true, false)

	showSubcat(document.form1.catalog_id.value);

}  

function manusubs(){
	//alert(document.form1.subcat_id.value);
	showSubcatdetail(document.form1.subcat_id.value);
}

function confirmDelete(delUrl,text) {
  if (confirm("Are you sure you want to delete\n"+text)) {
    document.location = delUrl;
  }
}
//----------------------------------------------------------
function check(frm){
		
		if (frm.catalog_id.value.length==0){
			alert ('Choose Catalog !!');
			frm.catalog_id.focus(); return false;
		}	
		if (frm.product_name_th.value.length==0){
			alert ('Please enter product name thai !!');
			frm.product_name_th.focus(); return false;
		}	
		if (frm.product_name_en.value.length==0){
			alert ('Please enter product name english !!');
			frm.product_name_en.focus(); return false;
		}	
		<?php  
		if($_GET['mode'] == "add"){
		?>
		if (frm.fimages.value.length==0){
			alert ('Choose Images1!!');
			frm.fimages.focus(); return false;
		}
		if (frm.fimages2.value.length==0){
			alert ('Choose Images2!!');
			frm.fimages2.focus(); return false;
		}
		if (frm.fimages3.value.length==0){
			alert ('Choose Images3!!');
			frm.fimages3.focus(); return false;
		}
		if (frm.fimages4.value.length==0){
			alert ('Choose Images4!!');
			frm.fimages4.focus(); return false;
		}
		<?php 
		}
		?>
}	
</script>

<SCRIPT type=text/javascript src="ajax.js"></SCRIPT>

<script language="JavaScript" src="../Carlender/calendar_us.js"></script>
<link rel="stylesheet" href="../Carlender/calendar.css">

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

<H3 align="left"><?php  echo ucfirst ($check_module); ?></H3>
<DIV class=clear>
  
</DIV></DIV><!-- End .content-box-header -->
<DIV class=content-box-content>

  <form action="update.php" method="post" enctype="multipart/form-data" name="form1" id="form1"  onSubmit="return check(this)">
       
        <table width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td><table cellspacing="0" width="100%">
              <tr >
                <td width="15%" nowrap class="name">Project Group <img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/></td>
                <td width="100%"><input name="project_name" type="text" id="project_name" style="width:400px"  value="<?php  echo stripslashes($project_name); ?>"></td>
							</tr>
							<tr >
                <td width="15%" nowrap class="name">Project Group <img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/></td>
                <td width="100%"><input name="project_name_native" type="text" id="project_name_native" style="width:400px"  value="<?php  echo stripslashes($project_name_native); ?>" ></td>
							</tr>
                            
            </table></td>
          </tr>
        </table>
   <br>
 
      <input type="submit" name="Submit" value="Submit" class="button">
      <input type="reset" name="Submit" value="Reset" class="button">
      <?php  
			$a_not_exists = array();
			post_param($a_param,$a_not_exists); 
		?>
      <input name="mode" type="hidden" id="mode" value="<?php  echo $_GET['mode'];?>">
			<input name="project_month" type="hidden" id="project_month" value="<?php  echo $project_month;?>">
      <input name="mid" type="hidden" id="mid" value="<?php  echo $_GET['mid'];?>">
      <input type="hidden" name="sorts" value="<?php  echo $sorts;?>">
      <input name="<?php  echo $PK_field;?>" type="hidden" id="<?php  echo $PK_field;?>" value="<?php  echo $_GET[$PK_field];?>">

  </form>

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
