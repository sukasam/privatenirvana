<?php 
	include ("../../include/config.php");
	include ("../../include/connect.php");
	include ("../../include/function.php");
	include ("config.php");
	Check_Permission ($conn,$check_module,$_SESSION['login_id'],"read");
	if ($_GET[page] == ""){$_REQUEST[page] = 1;	}
	$param = get_param($a_param,$a_not_exists);
	//-------------------------------------------------------------------------------------
	if($_REQUEST[action] == "delete"){
		
		$dirPath = "../../news/".$_REQUEST['dir_name'];
		$code = Check_Permission ($conn,$check_module,$_SESSION["login_id"],"delete");		
		
		if ($code == "1") {
			$sql = "delete from $tbl_name  where $PK_field = '$_GET[$PK_field]'";
			mysqli_query($conn,$sql);
			
			$sql = "delete from s_news_gallery where news_id = '".$_REQUEST['del_id']."'";
			mysqli_query($conn,$sql);
			
			$dirPath = "../../upload/news/".$_REQUEST['dir_name'];
			
			function deleteDirectory($dirPath) {
				if (is_dir($dirPath)) {
					$objects = scandir($dirPath);
					foreach ($objects as $object) {
						if ($object != "." && $object !="..") {
							if (filetype($dirPath . DIRECTORY_SEPARATOR . $object) == "dir") {
								deleteDirectory($dirPath . DIRECTORY_SEPARATOR . $object);
							} else {
								unlink($dirPath . DIRECTORY_SEPARATOR . $object);
							}
						}
					}
				reset($objects);
				rmdir($dirPath);
				}
			}
			
			deleteDirectory($dirPath);
			rmdir($dirPath."/thumbs");
			rmdir($dirPath);

			unlink("../../upload/news/".$_REQUEST['del_img']);
			
			header ("location:index.php?".$param); 
		} 
	}
	//-------------------------------------------------------------------------------------
	 if ($_GET[b] <> "" and $_GET[s] <> "") { 
		if ($_GET[s] == 0) $status = 1;
		if ($_GET[s] == 1) $status = 0;
		Check_Permission ($conn,$check_module,$_SESSION['login_id'],"update");
		$sql_status = "update $tbl_name set status = '$status' where $PK_field = '$_GET[b]'";
		mysqli_query ($conn,$sql_status);
			
		header ("location:index.php?".$param); 
	}
	//-------------------------------------------------------------------------------------
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
<SCRIPT type=text/javascript src="ajax.js"></SCRIPT>
<META name=GENERATOR content="MSHTML 8.00.7600.16535">
<script>
function confirmDelete(delUrl,text) {
  if (confirm("Are you sure you want to delete\n"+text)) {
    window.location = delUrl;
  }
}
//----------------------------------------------------------
function check_select(frm){
		if (frm.choose_action.value==""){
			alert ('Choose an action');
			frm.choose_action.focus(); return false;
		}
}


function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
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
<P id=page-intro><?php  echo ucfirst ($page_name); ?> <!--  | <a href="../news/tag.php?mid=<?php  echo $_GET['mid'];?>">Tag Keyword</a>--></P>

<UL class=shortcut-buttons-set>
  <LI><A class=shortcut-button href="../news/update.php?mode=add<?php  if ($param <> "") echo "&".$param; ?><?php  if(isset($_GET['cat_id'])){echo '&cat_id='.$_GET['cat_id'];}?>"><SPAN><IMG  alt=icon src="../images/pencil_48.png"><BR>
    Add Albums</SPAN></A></LI>
    <?php  
	if ($FR_module <> "") { 
	$param2 = get_return_param();
	?>
  <LI><A class=shortcut-button href="../<?php  echo $FR_module; ?>/?<?php  if($param2 <> "") echo $param2;?>"><SPAN><IMG  alt=icon src="../images/btn_back.gif"><BR>Back</SPAN></A></LI>
  <?php  }?> 
</UL>
  
  <!-- End .shortcut-buttons-set -->
<DIV class=clear></DIV><!-- End .clear -->
<DIV class=content-box><!-- Start Content Box -->
<DIV class=content-box-header align="right" style="padding-right:15px;">

<H3 align="left"><?php  echo $page_name; ?></H3>
<br>
<div>
    <div style="float:right;padding-left:10px;">
 <form name="form1" method="get" action="../news/index.php">
  <input name="keyword" type="text" id="keyword" value="<?php  echo $_GET['keyword'];?>">
    <input name="Action" type="submit" id="Action" value="Search">
    <?php 
			/*$a_not_exists = array('keyword');
			$param2 = get_param($a_param,$a_not_exists);*/
			  ?>
    <a href="../news/index.php?<?php  echo $param2;?>">Show All</a>
    <?php  
			/*$a_not_exists = array();
			post_param($a_param,$a_not_exists);*/
			?>
</form></div>

</div>


<br>
<DIV class=clear>

</DIV></DIV><!-- End .content-box-header -->
<DIV class=content-box-content>
<DIV id=tab1 class="tab-content default-tab"><!-- This is the target div. id must match the href of this div's tab -->
  <form name="form2" method="post" action="../news/confirm.php" onSubmit="return check_select(this)">
    <TABLE>
      <THEAD>
        <TR>
          <!--<TH width="11%"><INPUT class=check-all type=checkbox name="ca" value="true" onClick="chkAll(this.form, 'del[]', this.checked)"></TH>-->
          <TH width="10%" <?php  Show_Sort_bg ($PK_field, $orderby) ?>> <?php 
		$a_not_exists = array('orderby','sortby');
		$param2 = get_param($a_param,$a_not_exists);
	?>
            <?php   Show_Sort_new ($PK_field, "No.", $orderby, $sortby,$page,$param2.'ggg');?>
            &nbsp;</TH>
          <TH width="22%" nowrap><a>New Image</a></TH>
          <TH width="62%" nowrap><a>News Title</a></TH>
          <TH width="14%" nowrap><div align="center"><a>Gallery Images</a></div></TH>
          <TH width="6%" nowrap <?php  Show_Sort_bg ("date_show", $orderby) ?>><a> Sort </a>&nbsp;</TH>
          <!--<TH width="12%" nowrap <?php  Show_Sort_bg ("date_show", $orderby) ?>><div align="center"><a> Sequence</a></div></TH>-->
          <TH width="14%" nowrap ><div align="center"><a>Status</a></div></TH>
          <TH width="8%"><a>Edit</a></TH>
          <TH width="6%"><a>Del</a></TH>
          <!-- <TH width="8%"><a>Edit</a></TH>-->
         <!-- <TH width="7%"><a>Del</a></TH>-->
        </TR>
      </THEAD>
      <TFOOT>
        </TFOOT>
      <TBODY>
        <?php  
					if($orderby=="") $orderby = $tbl_name.".sorts,".$PK_field;
					if ($sortby =="") $sortby ="DESC";
					
				   	$sql = " select *,$tbl_name.create_date as c_date from $tbl_name  where 1 ";
					if ($_GET[$PK_field] <> "") $sql .= " and ($PK_field  = '" . $_GET[$PK_field] . " ' ) ";					
					if ($_GET[$FR_field] <> "") $sql .= " and ($FR_field  = '" . $_GET[$FR_field] . " ' ) ";					
 					if ($_GET[keyword] <> "") { 
						$sql .= "and ( " .  $PK_field  . " like '%$_GET[keyword]%' ";
						if (count ($search_key) > 0) { 
							$search_text = " and ( " ;
							foreach ($search_key as $key=>$value) { 
									$subtext .= "or " . $value  . " like '%" . $_GET[keyword] . "%'";
							}	
						}
						$sql .=  $subtext . " ) ";
					} 
					if ($orderby <> "") $sql .= " order by " . $orderby;
					if ($sortby <> "") $sql .= " " . $sortby;
					
					include ("../include/page_init.php");
					//echo $sql;
					$query = mysqli_query ($conn,$sql);
					if($_GET[page] == "") $_GET[page] = 1;
					$counter = ($_GET[page]-1)*$pagesize;
					
					while ($rec = mysqli_fetch_array ($query)) { 
					$counter++;
				   ?>
        <TR>
          <!--<TD style="vertical-align:middle"><INPUT type=checkbox name="del[]" value="<?php  echo $rec[$PK_field]; ?>" ></TD>-->
          <TD style="vertical-align:middle"><span class="text"><?php  echo $counter ; ?></span></TD>
          <TD style="vertical-align:middle"><?php  
			$part_img="../../upload/news/".$rec['images'];
			//if((file_exists($part_img))&&($file_name!= "")){
		  ?>
            <img src="<?php  echo $part_img;?>" width="180"></TD>
          <TD style="vertical-align:middle"><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/> <?php  echo $rec["news_name"]; ?><br/><br/><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/> <?php  echo $rec["news_name_native"]; ?></TD>
          <TD nowrap style="vertical-align:middle"><div align="center"><a href="list.php?mode=add&<?php  echo $PK_field; ?>=<?php  echo $rec["$PK_field"]; if($param <> "") {?>&<?php  echo $param; }?>"><img src="../images/icons/icon-48-media.png" alt="" width="30" border="0"></a></div></TD>
          <TD style="vertical-align:middle"><input type="text" name="sorts" size="2" value="<?php if($rec["sorts"] == 9999){echo '0';}else{echo $rec["sorts"];}?>" onChange="submit_upd_sequence(this.value,<?php echo $rec["news_id"];?>);" style="text-align:center;"></TD>
          <!--<TD style="vertical-align:middle"><div align="center"><input type="text" name="sorts" size="2" value="<?php  if($rec["sorts"] == 9999){echo '0';}else{echo $rec["sorts"];}?>" onChange="submit_upd_sequence(this.value,<?php  echo $rec["news_id"];?>);" style="text-align:center;"></div></TD>-->
          <TD nowrap style="vertical-align:middle"><div align="center">
            <?php  if($rec["status"]==0) {?>
            <a href="../news/?b=<?php  echo $rec[$PK_field]; ?>&s=<?php  echo $rec["status"]; ?>&page=<?php  echo $page; ?>&<?php  echo $FK_field; ?>=<?php  echo $_REQUEST["$FK_field"];?>&<?php  echo $param2;?>"><img src="../icons/status_on.gif" width="10" height="10"></a>
            <?php  } else{?>
            <a href="../news/?b=<?php  echo $rec[$PK_field]; ?>&s=<?php  echo $rec["status"]; ?>&page=<?php  echo $page; ?>&<?php  echo $FK_field; ?>=<?php  echo $_REQUEST["$FK_field"];?>&<?php  echo $param2;?>"><img src="../icons/status_off.gif" width="10" height="10"></a>
            <?php  }?>
          </div></TD>
        
          <TD style="vertical-align:middle">
            <A title=Edit href="../news/update.php?mode=update&<?php  echo $PK_field; ?>=<?php  echo $rec["$PK_field"]; if($param <> "") {?>&<?php  echo $param; }?>"><IMG alt=Edit src="../images/pencil.png"></A> <A title=Delete  href="#"></A></TD>
          <TD style="vertical-align:middle"><A title=Delete  href="#"><IMG alt=Delete src="../images/cross.png" onClick="confirmDelete('?action=delete&<?php  echo $PK_field; ?>=<?php  echo $rec[$PK_field];?>&del_id=<?php  echo $rec['news_id'];?>&del_img=<?php  echo $rec['images'];?>&dir_name=<?php  echo $rec['news_id'];?>','<?php  echo $title_del;?>  <?php  echo $rec[$PK_field];?> : <?php  echo $rec[$title_del_name];?>')"></A></TD>
        </TR>  
		<?php  }?>
      </TBODY>
    </TABLE>
    <br><br>
    <!--<DIV class="bulk-actions align-left">
            <SELECT name="choose_action" id="choose_action">
              <OPTION selected value="">Choose an action...</OPTION>
              <OPTION value="del">Delete</OPTION>
            </SELECT>            
            <?php 
				$a_not_exists = array();
				post_param($a_param,$a_not_exists); 
			?>
            <input class=button name="Action2" type="submit" id="Action2" value="Apply to selected">
          </DIV>--> <DIV class=pagination> <?php  include("../include/page_show.php");?> </DIV>
  </form>  
</DIV><!-- End #tab1 -->


</DIV><!-- End .content-box-content -->
</DIV><!-- End .content-box -->
<!-- End .content-box -->
<!-- End .content-box -->
<DIV class=clear></DIV><!-- Start Notifications -->
<!-- End Notifications -->

<?php  include("../footer.php");?>
</DIV><!-- End #main-content -->
</DIV>
</BODY>
</HTML>
