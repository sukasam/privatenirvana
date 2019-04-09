<?php 
  ////error_reporting(0)
error_reporting(~E_NOTICE);;	
	include ("../../include/config.php");
	include ("../../include/connect.php");
	include ("../../include/function.php");
  include ("config.php");

  //print_r($_REQUEST);

  //echo $_POST['mode']."MKUNG";

	if ($_POST['mode'] <> "") { 
		$param = "";
		$a_not_exists = array();
    $param = get_param($a_param,$a_not_exists);
    

		if ($_POST['mode'] == "add") { 
			include "../include/m_add.php";
      header ("location:index.php?" . $param); 
      
		}
		if ($_POST['mode'] == "update" ) { 

      $_POST['box4_3'] = nl2br($_POST['box4_3']);
      $_POST['box4_3_native'] = nl2br($_POST['box4_3_native']);

      include ("../include/m_update.php");

      $id = 1;
      
      if ($_FILES['fimages1']['name'] != "") { 
        @unlink("../../upload/home/".$_REQUEST['box1_img']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['fimages1']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/home/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fimages1"]["tmp_name"]);
        
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
          //$uploadOk = 1;

					move_uploaded_file($_FILES["fimages1"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set box1_img = '".$filename."' where $PK_field = '".$id."' ";
          mysqli_query($conn, $sql);	
          
          //echo $_POST['mode']."| dsfsf | ".$_REQUEST['box1_img']." | ".$_FILES['fimages1']['name']." | ".$check["mime"];

          resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
      } // end if ($_FILES[fimages][name] != "")
      
      if ($_FILES['fimages2']['name'] != "") { 
        @unlink("../../upload/home/".$_REQUEST['box2_img']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['fimages2']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/home/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fimages2"]["tmp_name"]);
        
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
          //$uploadOk = 1;

					move_uploaded_file($_FILES["fimages2"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set box2_img = '".$filename."' where $PK_field = '".$id."' ";
          mysqli_query($conn, $sql);	
          
          //echo $_POST['mode']."| dsfsf | ".$_REQUEST['box1_img']." | ".$_FILES['fimages1']['name']." | ".$check["mime"];

          resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
      } // end if ($_FILES[fimages][name] != "")
      
      if ($_FILES['fimages3']['name'] != "") { 
        @unlink("../../upload/home/".$_REQUEST['box3_img']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['fimages3']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/home/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fimages3"]["tmp_name"]);
        
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
          //$uploadOk = 1;

					move_uploaded_file($_FILES["fimages3"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set box3_img = '".$filename."' where $PK_field = '".$id."' ";
          mysqli_query($conn, $sql);	
          
          //echo $_POST['mode']."| dsfsf | ".$_REQUEST['box1_img']." | ".$_FILES['fimages1']['name']." | ".$check["mime"];

          resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
      } // end if ($_FILES[fimages][name] != "")
      
      if ($_FILES['fimages4']['name'] != "") { 
        @unlink("../../upload/home/".$_REQUEST['box4_img']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['fimages4']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/home/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fimages4"]["tmp_name"]);
        
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
          //$uploadOk = 1;

					move_uploaded_file($_FILES["fimages4"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set box4_img = '".$filename."' where $PK_field = '".$id."' ";
          mysqli_query($conn, $sql);	
          
          //echo $_POST['mode']."| dsfsf | ".$_REQUEST['box1_img']." | ".$_FILES['fimages1']['name']." | ".$check["mime"];

          resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
      } // end if ($_FILES[fimages][name] != "")
      

      if ($_FILES['fimages5']['name'] != "") { 
        @unlink("../../upload/home/".$_REQUEST['box5_img']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['fimages5']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/home/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fimages5"]["tmp_name"]);
        
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
          //$uploadOk = 1;

					move_uploaded_file($_FILES["fimages5"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set box5_img = '".$filename."' where $PK_field = '".$id."' ";
          mysqli_query($conn, $sql);	
          
          //echo $_POST['mode']."| dsfsf | ".$_REQUEST['box1_img']." | ".$_FILES['fimages1']['name']." | ".$check["mime"];

          resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")


      echo '<script type="text/javascript">
            window.location="update.php?mode=update&id=1&page=1&mid=1";
          </script>';

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
        <table width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td><table class="formFields" cellspacing="0" width="100%">
              <tr >
                <td class="name"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box1_1" type="text" id="box1_1"  value="<?php  echo $box1_1; ?>" size="60"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box1_1_native" type="text" id="box1_1_native"  value="<?php  echo $box1_1_native; ?>" size="80"></td>
              </tr>
              <tr >
                <td class="name"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box1_2" type="text" id="box1_2"  value="<?php  echo $box1_2; ?>" size="60"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box1_2_native" type="text" id="box1_2_native"  value="<?php  echo $box1_2_native; ?>" size="80"></td>
              </tr>
              <tr >
                <td class="name"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box1_3" type="text" id="box1_3"  value="<?php  echo $box1_3; ?>" size="80"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box1_3_native" type="text" id="box1_3_native"  value="<?php  echo $box1_3_native; ?>" size="80"></td>
              </tr>
              <tr >
                <td class="name">Link : <input name="box1_link" type="text" id="box1_link"  value="<?php  echo $box1_link; ?>" size="60"></td>
                <td>Images*<br><small>Size : 1200px X 800px</small><br/>
                <input name="fimages1" type="file" id="fimages1">
                  <br>
                  <?php  
					        if(file_exists("../../upload/home/".$box1_img)){?>
                  <img src="../../upload/home/<?php  echo $box1_img?>" width="150">
                  <?php  }?>
                  <input name="box1_img" type="hidden" value="<?php echo  $box1_img; ?>">
                </td>
              </tr>
              <tr >
                <td class="name"></td>
                <td></td>
              </tr>
              <tr >
                <td class="name"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box4_1" type="text" id="box4_1"  value="<?php  echo $box4_1; ?>" size="60"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box4_1_native" type="text" id="box4_1_native"  value="<?php  echo $box4_1_native; ?>" size="80"></td>
              </tr>
              <tr >
                <td class="name"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box4_2" type="text" id="box4_2"  value="<?php  echo $box4_2; ?>" size="60"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box4_2_native" type="text" id="box4_2_native"  value="<?php  echo $box4_2_native; ?>" size="80"></td>
              </tr>
              <tr >
                <td class="name"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><textarea rows="10" cols="50" name="box4_3" id="box4_3"><?php  echo strip_tags($box4_3); ?></textarea></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><textarea rows="10" cols="50" name="box4_3_native" id="box4_3_native"><?php  echo strip_tags($box4_3_native); ?></textarea></td>
              </tr>
              <tr >
                <td class="name">Link : <input name="box4_link" type="text" id="box4_link"  value="<?php  echo $box4_link; ?>" size="60"></td>
                <td>Images*<br><small>Size : 900px X 533px</small><br/>
                <input name="fimages4" type="file" id="fimages4">
                  <br>
                  <?php  
					        if(file_exists("../../upload/home/".$box4_img)){?>
                  <img src="../../upload/home/<?php  echo $box4_img?>" width="150">
                  <?php  }?>
                  <input name="box4_img" type="hidden" value="<?php echo  $box4_img; ?>">
                </td>
              </tr>
              <tr >
                <td class="name"></td>
                <td></td>
              </tr>
              <tr >
                <td class="name"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box2_1" type="text" id="box2_1"  value="<?php  echo $box2_1; ?>" size="80"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box2_1_native" type="text" id="box2_1_native"  value="<?php  echo $box2_1_native; ?>" size="80"></td>
              </tr>
              <tr >
                <td class="name"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box2_2" type="text" id="box2_2"  value="<?php  echo $box2_2; ?>" size="80"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box2_2_native" type="text" id="box2_2_native"  value="<?php  echo $box2_2_native; ?>" size="80"></td>
              </tr>
              <tr >
                <td class="name"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box2_3" type="text" id="box2_3"  value="<?php  echo $box2_3; ?>" size="80"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box2_3_native" type="text" id="box2_3_native"  value="<?php  echo $box2_3_native; ?>" size="80"></td>
              </tr>
              <tr >
                <td class="name"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box2_4" type="text" id="box2_4"  value="<?php  echo $box2_4; ?>" size="80"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box2_4_native" type="text" id="box2_4_native"  value="<?php  echo $box2_4_native; ?>" size="80"></td>
              </tr>
              <tr >
                <td class="name">Link : <input name="box2_link" type="text" id="box2_link"  value="<?php  echo $box2_link; ?>" size="60"></td>
                <td>Images*<br><small>Size : 1200px X 800px</small><br/>
                <input name="fimages2" type="file" id="fimages2">
                  <br>
                  <?php  
					        if(file_exists("../../upload/home/".$box2_img)){?>
                  <img src="../../upload/home/<?php  echo $box2_img?>" width="150">
                  <?php  }?>
                  <input name="box2_img" type="hidden" value="<?php echo  $box2_img; ?>">
                </td>
              </tr>
              <tr >
                <td class="name"></td>
                <td></td>
              </tr>
              <tr >
                <td class="name"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box3_1" type="text" id="box3_1"  value="<?php  echo $box3_1; ?>" size="60"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box3_1_native" type="text" id="box3_1_native"  value="<?php  echo $box3_1_native; ?>" size="80"></td>
              </tr>
              <tr >
                <td class="name"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box3_2" type="text" id="box3_2"  value="<?php  echo $box3_2; ?>" size="60"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box3_2_native" type="text" id="box3_2_native"  value="<?php  echo $box3_2_native; ?>" size="80"></td>
              </tr>
              <tr >
                <td class="name"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box3_3" type="text" id="box3_3"  value="<?php  echo $box3_3; ?>" size="80"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box3_3_native" type="text" id="box3_3_native"  value="<?php  echo $box3_3_native; ?>" size="80"></td>
              </tr>
              <tr >
                <td class="name">Link : <input name="box3_link" type="text" id="box3_link"  value="<?php  echo $box3_link; ?>" size="60"></td>
                <td>Images*<br><small>Size : 1200px X 800px</small><br/>
                <input name="fimages3" type="file" id="fimages3">
                  <br>
                  <?php  
					        if(file_exists("../../upload/home/".$box3_img)){?>
                  <img src="../../upload/home/<?php  echo $box3_img?>" width="150">
                  <?php  }?>
                  <input name="box3_img" type="hidden" value="<?php echo  $box3_img; ?>">
                </td>
              </tr>
              <tr >
                <td class="name"></td>
                <td></td>
              </tr>
              <tr >
                <td class="name"><input name="box5_link" type="text" id="box5_link"  value="<?php  echo $box5_link; ?>" size="60"></td>
                <td>Images*<br><small>Size : 1200px X 800px</small><br/>
                <input name="fimages5" type="file" id="fimages5">
                  <br>
                  <?php  
					        if(file_exists("../../upload/home/".$box5_img)){?>
                  <img src="../../upload/home/<?php  echo $box5_img?>" width="150">
                  <?php  }?>
                  <input name="box5_img" type="hidden" value="<?php echo  $box5_img; ?>"></td>
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
