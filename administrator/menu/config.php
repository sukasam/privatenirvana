<?php 
	error_reporting(0);	
	$PK_field = "menucate_id";
	//$FR_field = "";
	$check_module = "menu";
	$page_name = "Menu Setting";
	$tbl_name = "tb_menu_cate";
	$field_confirm_showname= "menucate_name";
	$fieldlist = array('menucate_name','url_link');
	$search_key = array('menucate_name');
	$pagesize = 10;
	$pages="menu";

	$a_param = array('page','orderby','sortby','keyword','pagesize','smid','mid');

?>