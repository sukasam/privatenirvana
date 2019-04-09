<?php 
	include ("../../include/config.php");
	include ("../../include/connect.php");
	include ("../../include/function.php");
	include ("../fckeditor/fckeditor.php");
	include ("config.php");

	if ($_POST['mode'] <> "") { 
		$param = "";
		$a_not_exists = array();
		$param = get_param($a_param,$a_not_exists);	
		 $_POST['project_name']=addslashes($_POST['project_name']);
		 $_POST['project_name_native']=addslashes($_POST['project_name_native']);

		 $_POST['box1_1']=addslashes($_POST['box1_1']);
		 $_POST['box1_1_native']=addslashes($_POST['box1_1_native']);
		 $_POST['box1_2']=addslashes($_POST['box1_2']);
		 $_POST['box1_2_native']=addslashes($_POST['box1_2_native']);
		 $_POST['box1_3']=addslashes($_POST['box1_3']);
		 $_POST['box1_3_native']=addslashes($_POST['box1_3_native']);
		 $_POST['box1_4']= nl2br(addslashes($_POST['box1_4']));
		 $_POST['box1_4_native']= nl2br(addslashes($_POST['box1_4_native']));


		 $_POST['facilities1_1']= nl2br(addslashes($_POST['facilities1_1']));
		 $_POST['facilities1_1_native']= nl2br(addslashes($_POST['facilities1_1_native']));
		 $_POST['facilities1_2']= nl2br(addslashes($_POST['facilities1_2']));
		 $_POST['facilities1_2_native']= nl2br(addslashes($_POST['facilities1_2_native']));
		 

		//-------------------------------------------------------------------------------------
		if ($_POST['mode'] == "add") {
			
			$_POST['status'] = 0;
			$_POST['sorts'] = '9999';
			
			include "../include/m_add.php";			
			$id=mysqli_insert_id($conn);
			
			$sql = "update $tbl_name set sorts= '9999' where $PK_field = '$id' ";
			mysqli_query($conn,$sql);
			
			
			if ($_FILES['fimages']['name'] != "") { 
					
					$mname="";
					$mname=gen_random_num(5);
					$filename = "";
					if($filename == "")
					$name_data=explode(".",$_FILES['fimages']['name']);
					$type = $name_data[1];
					$filename = $mname.".".$type;
					
					$target_dir = "../../upload/project/";
					$target_file = $target_dir . basename($filename);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					// Check if image file is a actual image or fake image
					$check = getimagesize($_FILES["fimages"]["tmp_name"]);
					
					@move_uploaded_file($_FILES["fimages"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set images = '".$filename."' where $PK_field = '".$id."' ";
					@mysqli_query($conn, $sql);	

					//resize_crop_image(800, 533, $target_file, $target_file);
	
			} // end if ($_FILES[fimages][name] != "")	


			if ($_FILES['fimages1']['name'] != "") { 
					
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['fimages1']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["fimages1"]["tmp_name"]);
				
				@move_uploaded_file($_FILES["fimages1"]["tmp_name"], $target_file);
				$sql = "update $tbl_name set box1_img = '".$filename."' where $PK_field = '".$id."' ";
				@mysqli_query($conn, $sql);	

				//resize_crop_image(2000, 1334, $target_file, $target_file);

		} // end if ($_FILES[fimages][name] != "")	

		if ($_FILES['fimages2']['name'] != "") { 
					
			$mname="";
			$mname=gen_random_num(5);
			$filename = "";
			if($filename == "")
			$name_data=explode(".",$_FILES['fimages2']['name']);
			$type = $name_data[1];
			$filename = $mname.".".$type;
			
			$target_dir = "../../upload/project/";
			$target_file = $target_dir . basename($filename);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["fimages2"]["tmp_name"]);
			
			@move_uploaded_file($_FILES["fimages2"]["tmp_name"], $target_file);
			$sql = "update $tbl_name set box2_img = '".$filename."' where $PK_field = '".$id."' ";
			@mysqli_query($conn, $sql);	

			//resize_crop_image(1200, 600, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")	

	if ($_FILES['fimages3']['name'] != "") { 
					
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['fimages3']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["fimages3"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["fimages3"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set box3_img = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

} // end if ($_FILES[fimages][name] != "")	


	if ($_FILES['gimg1']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg1']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg1"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg1"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img1 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")
	
	if ($_FILES['gimg2']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg2']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg2"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg2"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img2 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")

	if ($_FILES['gimg3']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg3']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg3"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg3"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img3 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")


	if ($_FILES['gimg4']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg4']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg4"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg4"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img4 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")

	if ($_FILES['gimg5']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg5']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg5"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg5"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img5 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")


	if ($_FILES['gimg6']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg6']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg6"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg6"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img6 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")


	if ($_FILES['gimg7']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg7']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg7"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg7"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img7 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")


	if ($_FILES['gimg8']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg8']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg8"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg8"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img8 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")


	if ($_FILES['gimg9']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg9']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg9"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg9"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img9 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")


	if ($_FILES['gimg10']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg10']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg10"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg10"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img10 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")


	if ($_FILES['gimg11']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg11']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg11"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg11"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img11 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")


	if ($_FILES['gimg12']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg12']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg12"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg12"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img12 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")

	if ($_FILES['gimg13']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg13']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg13"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg13"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img13 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")


	if ($_FILES['gimg14']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg14']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg14"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg14"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img14 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")


	if ($_FILES['gimg15']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg15']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg15"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg15"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img15 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")

	if ($_FILES['gimg16']['name'] != "") { 
						
		$mname="";
		$mname=gen_random_num(5);
		$filename = "";
		if($filename == "")
		$name_data=explode(".",$_FILES['gimg16']['name']);
		$type = $name_data[1];
		$filename = $mname.".".$type;
		
		$target_dir = "../../upload/project/";
		$target_file = $target_dir . basename($filename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["gimg16"]["tmp_name"]);
		
		@move_uploaded_file($_FILES["gimg16"]["tmp_name"], $target_file);
		$sql = "update $tbl_name set g_img16 = '".$filename."' where $PK_field = '".$id."' ";
		@mysqli_query($conn, $sql);	

		//resize_crop_image(1200, 800, $target_file, $target_file);

	} // end if ($_FILES[fimages][name] != "")

			
				echo '<script type="text/javascript">
                    	window.location="index.php?mid=8&group_id='.$_POST['project_group'].'";
                    </script>';
		}

		//-------------------------------------------------------------------------------------
		if ($_POST['mode'] == "update" ) { 
			
			
			$_POST['status'] = 0;
			$_POST['sorts'] = '9999';
		
			include ("../include/m_update.php");	
			
			$id=$_REQUEST['project_id'];

			
			if ($_FILES['fimages']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['images']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['fimages']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
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

					//resize_crop_image(800, 533, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")


			if ($_FILES['fimages1']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['box1_img']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['fimages1']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
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

					//resize_crop_image(2000, 1334, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['fimages2']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['box2_img']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['fimages2']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
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

					//resize_crop_image(1200, 600, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['fimages3']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['box3_img']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['fimages3']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
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

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg1']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img1']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg1']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg1"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg1"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img1 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			
			if ($_FILES['gimg2']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img2']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg2']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg2"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg2"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img2 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg3']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img3']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg3']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg3"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg3"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img3 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg4']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img4']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg4']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg4"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg4"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img4 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg5']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img5']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg5']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg5"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg5"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img5 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg6']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img6']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg6']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg6"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg6"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img6 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg7']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img7']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg7']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg7"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg7"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img7 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg8']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img8']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg8']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg8"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg8"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img8 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg9']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img9']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg9']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg9"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg9"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img9 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg10']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img10']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg10']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg10"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg10"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img10 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg11']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img11']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg11']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg11"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg11"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img11 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg12']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img12']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg12']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg12"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg12"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img12 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg13']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img13']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg13']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg13"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg13"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img13 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg14']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img14']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg14']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg14"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg14"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img14 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg15']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img15']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg15']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg15"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg15"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img15 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")

			if ($_FILES['gimg16']['name'] != "") { 
				@unlink("../../upload/project/".$_REQUEST['g_img16']);
				
				$mname="";
				$mname=gen_random_num(5);
				$filename = "";
				if($filename == "")
				$name_data=explode(".",$_FILES['gimg16']['name']);
				$type = $name_data[1];
				$filename = $mname.".".$type;
				
				$target_dir = "../../upload/project/";
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gimg16"]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					//$uploadOk = 1;

					move_uploaded_file($_FILES["gimg16"]["tmp_name"], $target_file);
					$sql = "update $tbl_name set g_img16 = '".$filename."' where $PK_field = '".$id."' ";
					mysqli_query($conn, $sql);	

					//resize_crop_image(1200, 800, $target_file, $target_file);
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
							
			} // end if ($_FILES[fimages][name] != "")
			
			echo '<script type="text/javascript">
                    	window.location="index.php?mid=8&group_id='.$_POST['project_group'].'";
                    </script>';
		}
	}
	
	//--------------------------------------------------------------------------------
	if ($_GET['mode'] == "add") { 
		 Check_Permission ($conn,$check_module,$_SESSION['login_id'],"add");
	}
	//--------------------------------------------------------------------------------
	if ($_GET[mode] == "update") { 
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
                  <small>Size : 800px X 533px</small></td>
                <td><input name="fimages" type="file" id="fimages">
                  <br>
                  <?php  
				  if($_GET['mode'] != 'add'){
					  if(file_exists("../../upload/project/".$images)){?>
                  <img src="../../upload/project/<?php  echo $images?>" width="150">
                  <?php  }?>
                  <input name="images" type="hidden" value="<?php echo  $images; ?>">
                  <?php }?></td>
              </tr>
              <tr >
                <td width="50%" nowrap class="name">News Title <img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/></td>
                <td width="50%"><input name="project_name" type="text" id="project_name" style="width:400px"  value="<?php  echo stripslashes($project_name); ?>"></td>
							</tr>
							<tr >
                <td width="50%" nowrap class="name">News Title <img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/></td>
                <td width="50%"><input name="project_name_native" type="text" id="project_name_native" style="width:400px"  value="<?php  echo stripslashes($project_name_native); ?>" ></td>
							</tr>
							<tr >
                <td nowrap class="name" colspan="2"><hr></td>
							</tr>
							<tr >
                <td nowrap class="name">Main Content</td>
                <td></td>
							</tr>
							<tr>
								<td nowrap class="name" colspan="2">
									<table>
										<tr>
											<td>
											Images*<br><small>Size : 2000px X 1334px</small><br/>
											<input name="fimages1" type="file" id="fimages1">
											<br>
											<?php
											if($_GET['mode'] != "add"){
												if(file_exists("../../upload/project/".$box1_img)){?>
													<img src="../../upload/project/<?php  echo $box1_img?>" width="150">
													<?php  }
											}?>
											<input name="box1_img" type="hidden" value="<?php echo  $box1_img; ?>">
													</td>
													<td>
											Images*<br><small>Size : 1200px X 600px</small><br/>
											<input name="fimages2" type="file" id="fimages2">
											<br>
											<?php  
											if($_GET['mode'] != "add"){
												if(file_exists("../../upload/project/".$box2_img)){?>
											<img src="../../upload/project/<?php  echo $box2_img?>" width="150">
											<?php  }}?>
											<input name="box2_img" type="hidden" value="<?php echo  $box2_img; ?>">
													</td>
													<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="fimages3" type="file" id="fimages3">
											<br>
											<?php  
											if($_GET['mode'] != "add"){if(file_exists("../../upload/project/".$box3_img)){?>
											<img src="../../upload/project/<?php  echo $box3_img?>" width="150">
											<?php  }}?>
											<input name="box3_img" type="hidden" value="<?php echo  $box3_img; ?>">
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr >
                <td><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box1_1" type="text" id="box1_1" style="width:400px"  value="<?php  echo stripslashes($box1_1); ?>"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box1_1_native" type="text" id="box1_1_native" style="width:400px"  value="<?php  echo stripslashes($box1_1_native); ?>"></td>
							</tr>
							<tr >
                <td><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box1_2" type="text" id="box1_2" style="width:400px"  value="<?php  echo stripslashes($box1_2); ?>"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box1_2_native" type="text" id="box1_2_native" style="width:400px"  value="<?php  echo stripslashes($box1_2_native); ?>"></td>
							</tr>
							<tr style="display:none;">
                <td><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><input name="box1_3" type="text" id="box1_3" style="width:400px"  value="<?php  echo stripslashes($box1_3); ?>"></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><input name="box1_3_native" type="text" id="box1_3_native" style="width:400px"  value="<?php  echo stripslashes($box1_3_native); ?>"></td>
							</tr>
							<tr >
                <td><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><textarea rows="10" cols="50" name="box1_4" id="box1_4"><?php  echo strip_tags($box1_4); ?></textarea></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><textarea rows="10" cols="50" name="box1_4_native" id="box1_4_native"><?php  echo strip_tags($box1_4_native); ?></textarea></td>
							</tr>
							<tr >
                <td nowrap class="name" colspan="2"><hr></td>
							</tr>
							<tr >
                <td nowrap class="name">Gallery</td>
                <td></td>
							</tr>
							<tr>
								<td nowrap class="name" colspan="2">
									<table>
										<tr>
											<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg1" type="file" id="gimg1">
											<br>
											<?php
											if($_GET['mode'] != "add"){
												if(file_exists("../../upload/project/".$g_img1)){?>
													<img src="../../upload/project/<?php  echo $g_img1?>" width="150">
													<?php  }
											}?>
											<input name="g_img1" type="hidden" value="<?php echo  $g_img1; ?>">
													</td>
													<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg2" type="file" id="gimg2">
											<br>
											<?php  
											if($_GET['mode'] != "add"){
												if(file_exists("../../upload/project/".$g_img2)){?>
											<img src="../../upload/project/<?php  echo $g_img2?>" width="150">
											<?php  }}?>
											<input name="g_img2" type="hidden" value="<?php echo  $g_img2; ?>">
													</td>
													<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg3" type="file" id="gimg3">
											<br>
											<?php  
											if($_GET['mode'] != "add"){if(file_exists("../../upload/project/".$g_img3)){?>
											<img src="../../upload/project/<?php  echo $g_img3?>" width="150">
											<?php  }}?>
											<input name="g_img3" type="hidden" value="<?php echo  $g_img3; ?>">
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr >
                <td nowrap class="name" colspan="2"><hr></td>
							</tr>
							<tr>
								<td nowrap class="name" colspan="2">
									<table>
										<tr>
											<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg4" type="file" id="gimg4">
											<br>
											<?php
											if($_GET['mode'] != "add"){
												if(file_exists("../../upload/project/".$g_img4)){?>
													<img src="../../upload/project/<?php  echo $g_img4?>" width="150">
													<?php  }
											}?>
											<input name="g_img4" type="hidden" value="<?php echo  $g_img4; ?>">
													</td>
													<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg5" type="file" id="gimg5">
											<br>
											<?php  
											if($_GET['mode'] != "add"){
												if(file_exists("../../upload/project/".$g_img5)){?>
											<img src="../../upload/project/<?php  echo $g_img5?>" width="150">
											<?php  }}?>
											<input name="g_img5" type="hidden" value="<?php echo  $g_img5; ?>">
													</td>
													<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg6" type="file" id="gimg6">
											<br>
											<?php  
											if($_GET['mode'] != "add"){if(file_exists("../../upload/project/".$g_img6)){?>
											<img src="../../upload/project/<?php  echo $g_img6?>" width="150">
											<?php  }}?>
											<input name="g_img6" type="hidden" value="<?php echo  $g_img6; ?>">
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr >
                <td nowrap class="name" colspan="2"><hr></td>
							</tr>
							<tr>
								<td nowrap class="name" colspan="2">
									<table>
										<tr>
											<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg7" type="file" id="gimg7">
											<br>
											<?php  
											if($_GET['mode'] != "add"){
												if(file_exists("../../upload/project/".$g_img7)){?>
											<img src="../../upload/project/<?php  echo $g_img7?>" width="150">
											<?php  }}?>
											<input name="g_img7" type="hidden" value="<?php echo  $g_img7; ?>">
													</td>
													<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg8" type="file" id="gimg8">
											<br>
											<?php  
											if($_GET['mode'] != "add"){if(file_exists("../../upload/project/".$g_img8)){?>
											<img src="../../upload/project/<?php  echo $g_img8?>" width="150">
											<?php  }}?>
											<input name="g_img8" type="hidden" value="<?php echo  $g_img8; ?>">
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr >
                <td nowrap class="name" colspan="2"><hr></td>
							</tr>
							<tr>
								<td nowrap class="name" colspan="2">
									<table>
										<tr>
											<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg9" type="file" id="gimg9">
											<br>
											<?php
											if($_GET['mode'] != "add"){
												if(file_exists("../../upload/project/".$g_img9)){?>
													<img src="../../upload/project/<?php  echo $g_img9?>" width="150">
													<?php  }
											}?>
											<input name="g_img9" type="hidden" value="<?php echo  $g_img9; ?>">
													</td>
													<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg10" type="file" id="gimg10">
											<br>
											<?php  
											if($_GET['mode'] != "add"){
												if(file_exists("../../upload/project/".$g_img10)){?>
											<img src="../../upload/project/<?php  echo $g_img10?>" width="150">
											<?php  }}?>
											<input name="g_img10" type="hidden" value="<?php echo  $g_img10; ?>">
													</td>
													<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg11" type="file" id="gimg11">
											<br>
											<?php  
											if($_GET['mode'] != "add"){if(file_exists("../../upload/project/".$g_img11)){?>
											<img src="../../upload/project/<?php  echo $g_img11?>" width="150">
											<?php  }}?>
											<input name="g_img11" type="hidden" value="<?php echo  $g_img11; ?>">
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr >
                <td nowrap class="name" colspan="2"><hr></td>
							</tr>
							<tr>
								<td nowrap class="name" colspan="2">
									<table>
										<tr>
											<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg12" type="file" id="gimg12">
											<br>
											<?php
											if($_GET['mode'] != "add"){
												if(file_exists("../../upload/project/".$g_img12)){?>
													<img src="../../upload/project/<?php  echo $g_img12?>" width="150">
													<?php  }
											}?>
											<input name="g_img12" type="hidden" value="<?php echo  $g_img12; ?>">
													</td>
													<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg13" type="file" id="gimg13">
											<br>
											<?php  
											if($_GET['mode'] != "add"){
												if(file_exists("../../upload/project/".$g_img13)){?>
											<img src="../../upload/project/<?php  echo $g_img13?>" width="150">
											<?php  }}?>
											<input name="g_img13" type="hidden" value="<?php echo  $g_img13; ?>">
													</td>
													<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg14" type="file" id="gimg14">
											<br>
											<?php  
											if($_GET['mode'] != "add"){if(file_exists("../../upload/project/".$g_img14)){?>
											<img src="../../upload/project/<?php  echo $g_img14?>" width="150">
											<?php  }}?>
											<input name="g_img14" type="hidden" value="<?php echo  $g_img14; ?>">
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr >
                <td nowrap class="name" colspan="2"><hr></td>
							</tr>
							<tr>
								<td nowrap class="name" colspan="2">
									<table>
										<tr>
											<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg15" type="file" id="gimg15">
											<br>
											<?php  
											if($_GET['mode'] != "add"){
												if(file_exists("../../upload/project/".$g_img15)){?>
											<img src="../../upload/project/<?php  echo $g_img15?>" width="150">
											<?php  }}?>
											<input name="g_img15" type="hidden" value="<?php echo  $g_img15; ?>">
													</td>
													<td>
											Images*<br><small>Size : 1200px X 800px</small><br/>
											<input name="gimg16" type="file" id="gimg16">
											<br>
											<?php  
											if($_GET['mode'] != "add"){if(file_exists("../../upload/project/".$g_img16)){?>
											<img src="../../upload/project/<?php  echo $g_img16?>" width="150">
											<?php  }}?>
											<input name="g_img16" type="hidden" value="<?php echo  $g_img16; ?>">
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr >
                <td nowrap class="name" colspan="2"><hr></td>
							</tr>
							<tr >
                <td nowrap class="name" style="vertical-align: top;">Location
								<br><br>
								<textarea rows="10" cols="50" name="location" id="location"><?php  echo stripslashes($location); ?></textarea>
								</td>
                <td></td>
							</tr>
							<tr >
                <td nowrap class="name" colspan="2"><hr></td>
							</tr>
							<tr >
                <td nowrap class="name">Facilities Around The Project</td>
                <td></td>
							</tr>
							<tr >
                <td><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><textarea rows="10" cols="50" name="facilities1_1" id="facilities1_1"><?php  echo strip_tags($facilities1_1); ?></textarea></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><textarea rows="10" cols="50" name="facilities1_1_native" id="facilities1_1_native"><?php  echo strip_tags($facilities1_1_native); ?></textarea></td>
							</tr>
							<tr >
                <td><img src="../images/lang/eng.png" width="20" style="vertical-align: middle;"/><textarea rows="10" cols="50" name="facilities1_2" id="facilities1_2"><?php  echo strip_tags($facilities1_2); ?></textarea></td>
                <td><img src="../images/lang/tha.png" width="20" style="vertical-align: middle;"/><textarea rows="10" cols="50" name="facilities1_2_native" id="facilities1_2_native"><?php  echo strip_tags($facilities1_2_native); ?></textarea></td>
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
			<input name="project_group" type="hidden" id="project_group" value="<?php  echo $_GET['group_id'];?>">
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
