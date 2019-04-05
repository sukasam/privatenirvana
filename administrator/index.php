<?php 
 	error_reporting(0);	
	include ("../include/config.php");
	include ("../include/connect.php");
	include ("../include/function.php");
	if ($_POST[submit] == "Sign In") { 
		$sql = "select * from s_user where username like '$_POST[login_name]' and password like '$_POST[passwd]'";
		$query = mysqli_query ($conn,$sql);
		if ($rec = mysqli_fetch_array ($query)) { 
			$_SESSION["login_id"] = $rec["user_id"];
			$_SESSION["login_name"] = $rec["username"];
			header ("location:welcome/index.php");
		}else{
			$msg_login="Username or password incorrect !!";
		}
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Admin System | Sign In</title>
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/invalid.css" type="text/css" media="screen" />  
        
        <Script Language="JavaScript">
		<!--
		function check(frm){
		if (frm.login_name.value.length==0){
			alert ('Please enter username!!');
			frm.login_name.focus(); return false;
		}
		if (frm.passwd.value==0){
			alert ('Please enter password!!');
			frm.passwd.focus(); return false;
		}	
	
		}	
		//-->
		</Script>
     
    </head>
   
    <body id="login">
        <div id="login-wrapper" class="png_bg">
            <div id="login-top">
                <h1>Login Admin System</h1>
                <!-- Logo (221px width) -->
                <img src="images/logo.png" alt="Simpla Admin logo" name="logo" width="221" id="logo" />            </div> 
            <!-- End #logn-top -->
            <div id="login-content">
                <form name="frm" method="post" action="" onSubmit="return check(this)">
                    <div id="msg">
                        <div class="notification information png_bg">
                            <div> <?php  if($msg_login==""){?>Enter a username and password to Sign In.<?php  }else{?>Username or password incorrect !!<?php  }?></div>
                        </div>
                    </div>
                    <p>
                        <label>Username</label>
                        <input class="text-input" type="text" name="login_name"/>
                    </p>
                    <div class="clear"></div>
                    <p>
                        <label>Password</label>
                        <input class="text-input" type="password" name="passwd" />
                    </p>
                    <div class="clear"></div>
                    <!--
                    <p id="remember-password">
                        <input type="checkbox" name="remember" />Remember me
                    </p>
                    -->
                    <div class="clear"></div>
                    <p>
                        <input class="button" type="submit" value="Sign In" name="submit"/>
                    </p>
                </form>
            </div> <!-- End #login-content -->
        </div> <!-- End #login-wrapper -->
    </body>
</html>
