<?php
include_once("../include/app_top.php");
if(isset($_GET['subscribeemail']) && $_GET['subscribeemail'] != ""){

    $quSubscribe = mysqli_query($conn,"SELECT * FROM s_subscribe WHERE email ='".$_GET['subscribeemail']."'");
    $rowcount=mysqli_num_rows($quSubscribe);

    if($rowcount == 0){
        mysqli_query($conn,"INSERT INTO `s_subscribe` (`id`, `email`, `date`, `time`) VALUES (NULL, '".$_GET['subscribeemail']."', '".date("Y-m-d")."', '".date("H:i:s")."');");
    }

    echo "<script>alert('".TH_THANKS_SUBSCIBE."');window.location='".curPageURLWithoutParam()."'</script>;";
    
    mysqli_close($conn);
}

if(isset($_GET['changelang']) && $_GET['changelang'] != ""){
    $urlReplace = str_replace("/tha","/eng",curPageURLWithoutParam());
    header("Location:".$urlReplace );
}
?>
<link rel="stylesheet" href="css/jquery.fancybox.min.css" />
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>

<div class="pn-topbar clearfix">
    <div class="pn-ltop clearfix">
    </div>
    <div class="pn-head-sect clearfix">
        <div class="pn-logo clearfix">
            <a href="index.php"><img class="pn-logo_img image" src="img/pn_logo.png" /></a>
        </div>
        <div class="pn-menu-sect clearfix">
            <div class="pn-lang clearfix">
                <a href="?changelang=eng"><img class="pn-lang1 image" src="img/en_flag.png" /></a>
            </div>


            <div class="pn-nav clearfix">
                <i class="icon icon-menu grd-color txt-32" onclick="openNav()"></i>
                <div id="myNav" class="pn-resp-nav overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                    <div class="sidenav">
                        <a href="index.php">หน้าแรก</a>
                        <a href="portfolios.php">โครงการของเรา</a>
                        <a href="pr_news.php">ข่าวสารกิจกรรม</a>

                        <!--<button class="dropdown-btn">News &amp; Activities
              <i class="icon icon-circle-down side-ico whd-color"></i>
            </button>
            <div class="dropdown-container">
              <a href="pr_news.php">Pr News</a>
            </div>
                        <a href="location.php">Location</a>-->

                        <a href="contact.php">ติดต่อเรา</a>
                    </div>


                </div>
            </div>



            <div class="pn-main-nav">
                <div class="navbar">
                    <a href="index.php">หน้าแรก</a>
                    <a href="portfolios.php">โครงการของเรา</a>
                    <a href="pr_news.php">ข่าวสารกิจกรรม</a>

                    <!--
          <div class="dropdown">
            <button class="dropbtn">News &amp; Activities
              <i class="icon icon-circle-down txt-13 grn-color"></i>
            </button>
            <div class="dropdown-content">
              <a href="pr_news.php">Pr News</a>
            </div>
          </div>
                    <a href="location.php">Location</a>-->

                    <a href="contact.php">ติดต่อเรา</a>

                </div>

            </div>
        </div>
    </div>
</div>


<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}
</script>