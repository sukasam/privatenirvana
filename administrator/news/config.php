<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<?php 
	$PK_field = "news_id";
	//$FR_field = "";
	$check_module = "News";
	$page_name = "News Management";
	$tbl_name = "s_news";
	$field_confirm_showname= "news_name";
	$fieldlist = array('images','news_name','news_name_native','news_desc','news_desc_native','sorts','status','news_month');
	$search_key = array('news_name','news_name_native');
	$title_del="News Management";
	$title_del_name="news_name";
	$pagesize = 20;
	$pages="News Management";

	$a_param = array('page','orderby','sortby','keyword','pagesize','mid','smid');
?>