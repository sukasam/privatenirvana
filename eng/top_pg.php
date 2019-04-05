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
                <img class="pn-lang1 image" src="img/th_flag.png" />
            </div>


            <div class="pn-nav clearfix">
                <i class="icon icon-menu grd-color txt-32" onclick="openNav()"></i>
                <div id="myNav" class="pn-resp-nav overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                    <div class="sidenav">
                        <a href="index.php">Home</a>
                        <a href="portfolios.php">Portfolios</a>
                        <a href="pr_news.php">News &amp; Activities</a>

                        <!--<button class="dropdown-btn">News &amp; Activities
              <i class="icon icon-circle-down side-ico whd-color"></i>
            </button>
            <div class="dropdown-container">
              <a href="pr_news.php">Pr News</a>
            </div>
                        <a href="location.php">Location</a>-->

                        <a href="contact.php">Contact Us</a>
                    </div>


                </div>
            </div>



            <div class="pn-main-nav">
                <div class="navbar">
                    <a href="index.php">Home</a>
                    <a href="portfolios.php">Portfolios</a>
                    <a href="pr_news.php">News &amp; Activities</a>

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

                    <a href="contact.php">Contact Us</a>

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