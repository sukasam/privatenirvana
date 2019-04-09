<?php
    include_once('../include/app_top.php');
    $rowHome = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM s_home WHERE id=1"),MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">
</head>

<body>

    <div class="primaryContainer clearfix">

        <?php include("top_pg.php"); ?>

        <div class="pn-ban-sect clearfix">
            <a href="<?php echo $rowHome['box1_link'];?>">
                <div class="pn-baner clearfix">
                    <div class="pn-baner-title clearfix">
                        <div class="pn-baner-txt">
                            <span class="textspan"><?php echo $rowHome['box1_1_native'];?><br /><?php echo $rowHome['box1_2_native'];?></span>
                        </div>
                        <div class="pn-baner-txt1">
                            <?php echo $rowHome['box1_3_native'];?><br />
                        </div>
                    </div>
                    <div class="pn-title-locate clearfix">
                        <!-- <div class="pn-title-locate-txt">
                        Living Along The Trees...
                        </div>-->
                    </div>
                    <img class="pn-baner-img image" src="<?php echo "../upload/home/".$rowHome['box1_img'];?>" />
                </div>
            </a>
        </div>
        <div class="pn-welcome-sect clearfix">
            <div class="pn-welcome-cont clearfix">
                <a href="<?php echo $rowHome['box4_link'];?>">
                <div class="pn-welcome-l clearfix">
                    <img class="pn-welcome-img image" src="<?php echo "../upload/home/".$rowHome['box4_img'];?>" />
                </div>
                <div class="pn-welcome-r clearfix">
                    <p class="pn-welcome-txt">
                        <?php echo $rowHome['box4_1_native'];?>
                    </p>
                    <p class="pn-private-txt">
                        <?php echo $rowHome['box4_2_native'];?><br />
                    </p>
                    <p class="pn-about-details">
                        <?php echo $rowHome['box4_3_native'];?>
                    </p>
                </div>
                </a>
            </div>
        </div>
        <div class="pn-ban-sect1 clearfix">
            <a href="<?php echo $rowHome['box2_link'];?>">
            <div class="pn-baner1 clearfix">
                <div class="pn-baner-title1 clearfix">
                    <p class="pn-baner-txt2">
                        <?php echo $rowHome['box2_1_native'];?><br /><?php echo $rowHome['box2_2_native'];?><br />
                    </p>
                    <p class="pn-baner-txt3">
                        <?php echo $rowHome['box2_3_native'];?><br />
                    </p>
                </div>
                <div class="pn-title-locate1 clearfix">
                    <p class="pn-title-locate-txt1">
                        <?php echo $rowHome['box2_4_native'];?><br />
                    </p>
                </div>
                <img class="pn-baner-img1 image" src="<?php echo "../upload/home/".$rowHome['box2_img'];?>" />
            </div>
            </a>
        </div>
        <div class="pn-ban-sect2 clearfix">
            <a href="<?php echo $rowHome['box3_link'];?>">
            <div class="pn-baner2 clearfix">
                <div class="pn-baner-title2 clearfix">
                    <p class="pn-baner-txt4">
                        <?php echo $rowHome['box3_1_native'];?><br />
                    </p>
                    <p class="pn-baner-txt5">
                    <?php echo $rowHome['box3_2_native'];?><br />
                    </p>
                </div>
                <div class="pn-title-locate2 clearfix">
                    <p class="pn-title-locate-txt2">
                        <?php echo $rowHome['box3_3_native'];?><br />
                    </p>
                </div>
                <img class="pn-baner-img2 image" src="<?php echo "../upload/home/".$rowHome['box3_img'];?>" />
            </div>
            </a>
        </div>
        <div class="pn-ban-sect3 clearfix">
            <div class="pn-baner3 clearfix">
                <div class="pn-baner-title3 clearfix">
                    <!--<p class="pn-baner-txt6">
                        Why Private Nirvana<br />
                    </p>
                    <p class="pn-baner-txt7">
                        Town Home<br />
                    </p>-->
                </div>
                <div class="pn-title-locate3 clearfix">
                    <!--<p class="pn-title-locate-txt3">
                        “ Living Through Completion ”<br />
                    </p>-->
                </div>
                <a href="<?php echo $rowHome['box5_link'];?>" target="_blank">
                    <img class="pn-baner-img3 image" src="<?php echo "../upload/home/".$rowHome['box5_img'];?>" />
                </a>
            </div>
        </div>


        <!--<div class="pn-our-review clearfix">
            <p class="pn-our-review-txt">
                Our Reviews<br />
            </p>
            <div class="pn-our-review-sect clearfix">
                <img class="pn-our-review-ico1 image" src="img/review_ico01.png" />
                <img class="pn-our-review-ico2 image" src="img/review_ico02.png" />
                <img class="pn-our-review-ico3 image" src="img/review_ico03.png" />
                <img class="pn-our-review-ico4 image" src="img/review_ico04.png" />
            </div>
        </div>-->

        <?php include("footer_pg.php"); ?>

    </div>
</body>

</html>