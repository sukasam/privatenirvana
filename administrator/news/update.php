<?php 
	include ("../../include/config.php");
	include ("../../include/connect.php");
	include ("../../include/function.php");
	include("../fckeditor/fckeditor.php");
	include ("config.php");

	if ($_POST[mode] <> "") { 
		$param = "";
		$a_not_exists = array();
		$param = get_param($a_param,$a_not_exists);	
		
		$_POST['news_desc']=nl2br(addslashes($_POST['news_desc']));
		$_POST['news_desc_native']=nl2br(addslashes($_POST['news_desc_native']));
		//-------------------------------------------------------------------------------------
		if ($_POST[mode] == "add") {
			

			$_POST['status'] = 0;
			$_POST['sorts'] = '9999';
			$_POST['news_month'] = date("Y-m");
			
			include "../include/m_add.php";			
			$id=mysqli_insert_id($conn);

			$dirs = $id;
			
			 $sql = "update $tbl_name set sorts= '9999' where $PK_field = '$id' ";
			mysqli_query($conn,$sql);
			
			
			
			mkdir("../../upload/news/".$dirs."/", 0777);	
			//mkdir("../../upload/news/".$dirs."/thumbs/", 0777);	
			
			if ($_FILES['fimages']['name'] != "") { 
					
					$mname="";
					$mname=gen_random_num(5);
					$filename = "";
					if($filename == "")
					$name_data=explode(".",$_FILES['fimages']['name']);
					$type = $name_data[1];
					$filename = $mname.".".$type;
					
					$target_dir = "../../upload/news/";
					$target_file = $target_dir . basename($filename);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					// Check if image file is a actual image or fake image
					$check = getimagesize($_FILES["fimages"]["tmp_name"]);
					
					@move_uploaded_file($_FILES["fimages"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set images = '".$filename."' where $PK_field = '".$id."' ";
					@mysqli_query($conn, $sql);	

					resize_crop_image(1200, 800, $target_file, $target_file);
	
				} // end if ($_FILES[fimages][name] != "")	
				
				
				echo '<script type="text/javascript">
                    	window.location="index.php?mid=7";
                    </script>';

			
			header ("location:index.php?". $param); 
		}

		if($_POST['mode'] == "resize" ){
			echo "resize";
		}

		//-------------------------------------------------------------------------------------
		if ($_POST[mode] == "update" ) { 
			
			$news_name = $_POST['news_name'];
			$news_name_old = $_POST['news_name_old'];
			
			$_POST['status'] = 0;
			$_POST['sorts'] = '9999';
		
			include ("../include/m_update.php");	
			
			$id=$_REQUEST['news_id'];
			
			if($news_name_old != $news_name){
				sleep(1);    // this does the trick
				rename ("../../news/".$news_name_old."/", "../../news/".$news_name."/"); //no error 	
			}
			
			if ($_FILES['fimages']['name'] != "") { 
				@unlink("../../upload/news/".$_REQUEST['images']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['fimages']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/news/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["fimages"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["fimages"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set images = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
				
				
				
							
			} // end if ($_FILES[fimages][name] != "")
			
			
			echo '<script type="text/javascript">
                    	window.location="index.php?mid=7";
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
                <td nowrap class="name">Images*<br>
                  <small>Size : 1200px X 800px</small></td>
                <td><input name="fimages" type="file" id="fimages">
                  <br>
                  <?php  
				  if($_GET['mode'] != 'add'){
					  if(file_exists("../../upload/news/".$images)){?>
                  <img src="../../upload/news/<?php  echo $images?>" width="150">
                  <?php  }?>
                  <input name="images" type="hidden" value="<?php echo  $images; ?>">
                  <?php }?></td>
              </tr>
              <tr >
                <td width="15%" nowrap class="name">News Title <img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/></td>
                <td width="100%"><input name="news_name" type="text" id="news_name" style="width:400px"  value="<?php  echo stripslashes($news_name); ?>"></td>
							</tr>
							<tr >
                <td width="15%" nowrap class="name">News Title <img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/></td>
                <td width="100%"><input name="news_name_native" type="text" id="news_name_native" style="width:400px"  value="<?php  echo stripslashes($news_name_native); ?>" ></td>
							</tr>
							<tr >
                <td width="15%" style="vertical-align: top;" nowrap class="name">News Descriptions <img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/></td>
                <td width="100%">
									<textarea rows="10" cols="50" name="news_desc" id="news_desc"><?php  echo strip_tags($news_desc); ?></textarea>
								</td>
              </tr>
							<tr >
                <td width="15%" nowrap class="name" style="vertical-align: top;">News Descriptions <img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/></td>
                <td width="100%">
									<textarea rows="10" cols="50" name="news_desc_native" id="news_desc_native"><?php  echo strip_tags($news_desc_native); ?></textarea>
								</td>
              </tr>
							<tr >
                <td nowrap class="name"></td>
                <td></td>
							</tr>
							
              <!--<tr >
                <td nowrap class="name">Albums Youtube </td>
                <td><input name="album_video" type="text" id="album_video" style="width:400px"  value="<?php  echo stripslashes($album_video); ?>" maxlength="70"></td>
              </tr>-->
              <!-- <tr >
                <td nowrap class="name">Status</td>
                <td><input type="radio" name="status" id="status2" value="0" <?php  if(($status==0)||($status=="")) echo "checked";?>>
                  Show
                  <input type="radio" name="status" id="status2" value="1" <?php  if($status==1) echo "checked";?>>
                  Hide </td>
              </tr> -->
            
                            
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
			<input name="news_month" type="hidden" id="news_month" value="<?php  echo $news_month;?>">
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
