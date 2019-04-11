<?php
include_once("../include/app_top.php");
if(!isset($_GET['project_id']) || $_GET['project_id'] == ""){
    header("Location:portfolios.php");
}
$rowProject = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM s_project WHERE project_id = ".$_GET['project_id']),MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="home.css">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">
</head>

<body>

    <div class="primaryContainer clearfix">

        <?php include("top_pg.php"); ?>

        <div class="port-banner-sect clearfix" style="background-image: url(<?php echo "../upload/project/".$rowProject['box1_img']?>);">
            <div class="port-baner-title clearfix">
                <p class="port-baner-txt">
                    <?php echo $rowProject['box1_1'];?><br />
                </p>
                <p class="port-baner-txt1">
                <?php echo $rowProject['box1_2'];?><br />
                </p>
            </div>
        </div>
        <div class="port-project-nav clearfix">
            <p class="port-project-title">
                <?php echo getProjectGroup($conn,$rowProject['project_group'],'en');?>
            </p>
            <div class="port-project-menu clearfix">
                <p class="port-concept-txt">
                    Project Concept<br />
                </p>
                <p class="port-concept-txt">
                    House Info<br />
                </p>
                <p class="port-concept-txt">
                    Gallery<br />
                </p>
                <p class="port-concept-txt">
                    Location<br />
                </p>
            </div>
        </div>
        <div class="port-concept-sect clearfix">
            <div class="port-concept-info clearfix">
                <div class="port-concept-pic clearfix">
                    <img class="port-concept-img image" src="<?php echo "../upload/project/".$rowProject['box2_img']?>" />
                </div>
                <div class="port-concept-cont clearfix">
                    <div class="port-concept-title">
                        <img src="img/logo_ladprao.png" class="img_logo image">
                    </div>
                    <div class="port-concept-details">
                        <?php echo $rowProject['box1_4'];?>
                    </div>
                </div>
            </div>
        </div>
        <div class="port-info-sect clearfix">
            <div class="port-info-info clearfix">
                <div class="port-info-pic clearfix">
                    <img class="port-info-img image" src="<?php echo "../upload/project/".$rowProject['box3_img']?>" />
                </div>
                <div class="port-info-cont clearfix">
                    <p class="text">
                        House Info<br />
                    </p>

                    <div class="port-info-details" style="display:none;">

                        <div class="port-info-content">
                            <div class="port-info-content-l">Project Name :</div>
                            <div class="port-info-content-r txt-upper">Private Nirvana Ladprao</div>
                        </div>

                        <div class="port-info-content">
                            <div class="port-info-content-l">Concept :</div>
                            <div class="port-info-content-r">“ Natural Design House ”</div>
                        </div>

                        <div class="port-info-content">
                            <div class="port-info-content-l">Location :</div>
                            <div class="port-info-content-r">100 Soi Yothin Phatthana, Pradit Manutham Rd., Khlong Chan,
                                Bangkapi, Bangkok</div>
                        </div>

                        <div class="port-info-content">
                            <div class="port-info-content-l">Area :</div>
                            <div class="port-info-content-r">27 Rai
                            </div>
                        </div>

                        <div class="port-info-content">
                            <div class="port-info-content-l">No. of unit :</div>
                            <div class="port-info-content-r">92</div>
                        </div>

                        <div class="port-info-content">
                            <div class="port-info-content-l">Facilities :</div>
                            <div class="port-info-content-r">・ Club house<br>
                                ・ Swimming pool<br>
                                ・ Public park</div>
                        </div>

                        <div class="port-info-content">
                            <div class="port-info-content-l">Project Opening :</div>
                            <div class="port-info-content-r">June 2004</div>
                        </div>

                        <div class="port-info-content">
                            <div class="port-info-content-l">Project Closed :</div>
                            <div class="port-info-content-r">December 2005</div>
                        </div>


                    </div>

                    <div class="port-houseinfo-details">
                        <span class=" txt-20 txt-bold"><?php echo $rowProject['box1_2'];?></span><br />
                        <?php echo $rowProject['box1_4'];?>
                        <!-- <span class=" txt-20 txt-bold">“ Natural Design House
                            ”</span><br />
                        From June 2004, Private Nirvana Ladprao is 27 Rai and has 92 single houses, club house, swimming
                        pool and public park. All were sold out at the end of 2005 .<br /><br />
                        • Located at 100 Soi Yothin Phattha n a, Pradit Manutham Rd., K longc han, Bangkapi, Bangkok -->
                    </div>

                </div>
            </div>
            <div class="port-gallery-sect clearfix">
                <div class="port-gallery-title clearfix">
                    <p class="port-gallery-text">
                        Gallery<br />
                    </p>
                </div>

                <div class="port-gallery-sect1 clearfix">

                    <div class="port-gallery-img1 clearfix">
                        <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img1']?>">
                            <img class="port-gallery-pic1 image" src="<?php echo "../upload/project/".$rowProject['g_img1']?>" /></a>
                    </div>

                    <div class="port-gallery-sect1-2 clearfix">

                        <div class="port-gallery-img2 clearfix">
                            <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img2']?>">
                                <img class="port-gallery-pic2 image" src="<?php echo "../upload/project/".$rowProject['g_img2']?>" /></a>
                        </div>

                        <div class="port-gallery-img3 clearfix">
                            <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img3']?>">
                                <img class="port-gallery-pic3 image" src="<?php echo "../upload/project/".$rowProject['g_img3']?>" /></a>
                        </div>

                    </div>
                </div>

                <div class="port-gallery-sect2 clearfix">
                    <div class="port-gallery-sect2-1 clearfix">

                        <div class="port-gallery-img4 clearfix">
                            <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img4']?>">
                                <img class="port-gallery-pic4 image" src="<?php echo "../upload/project/".$rowProject['g_img4']?>" /></a>
                        </div>

                        <div class="port-gallery-img5 clearfix">
                            <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img5']?>">
                                <img class="port-gallery-pic5 image" src="<?php echo "../upload/project/".$rowProject['g_img5']?>" /></a>
                        </div>

                    </div>

                    <div class="port-gallery-img6 clearfix">
                        <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img6']?>">
                            <img class="port-gallery-pic6 image" src="<?php echo "../upload/project/".$rowProject['g_img6']?>" /></a>
                    </div>

                </div>

                <div class="port-gallery-sect3 clearfix">

                    <div class="port-gallery-img7 clearfix">
                        <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img7']?>">
                            <img class="port-gallery-pic7 image" src="<?php echo "../upload/project/".$rowProject['g_img7']?>" /></a>
                    </div>

                    <div class="port-gallery-img8 clearfix">
                        <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img8']?>">
                            <img class="port-gallery-pic8 image" src="<?php echo "../upload/project/".$rowProject['g_img8']?>" /></a>
                    </div>

                </div>

            </div>

            <div class="port-gallery-sect1 clearfix">

                <div class="port-gallery-img1 clearfix">

                    <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img9']?>">
                        <img class="port-gallery-pic1 image" src="<?php echo "../upload/project/".$rowProject['g_img9']?>" /></a>
                </div>

                <div class="port-gallery-sect1-2 clearfix">

                    <div class="port-gallery-img2 clearfix">
                        <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img10']?>">
                            <img class="port-gallery-pic2 image" src="<?php echo "../upload/project/".$rowProject['g_img10']?>" /></a>
                    </div>

                    <div class="port-gallery-img3 clearfix">
                        <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img11']?>">
                            <img class="port-gallery-pic3 image" src="<?php echo "../upload/project/".$rowProject['g_img11']?>" /></a>
                    </div>

                </div>
            </div>

            <div class="port-gallery-sect2 clearfix">
                <div class="port-gallery-sect2-1 clearfix">

                    <div class="port-gallery-img4 clearfix">
                        <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img12']?>">
                            <img class="port-gallery-pic4 image" src="<?php echo "../upload/project/".$rowProject['g_img12']?>" /></a>
                    </div>

                    <div class="port-gallery-img5 clearfix">
                        <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img13']?>">
                            <img class="port-gallery-pic5 image" src="<?php echo "../upload/project/".$rowProject['g_img13']?>" /></a>
                    </div>

                </div>

                <div class="port-gallery-img6 clearfix">
                    <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img14']?>">
                        <img class="port-gallery-pic6 image" src="<?php echo "../upload/project/".$rowProject['g_img14']?>" /></a>
                </div>
            </div>

            ß <div class="port-gallery-sect3 clearfix">

                <div class="port-gallery-img7 clearfix">
                    <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img15']?>">
                        <img class="port-gallery-pic7 image" src="<?php echo "../upload/project/".$rowProject['g_img15']?>" /></a>
                </div>

                <div class="port-gallery-img8 clearfix">
                    <a data-fancybox="drum" data-caption="<?php echo $rowProject['box1_1'];?>" href="<?php echo "../upload/project/".$rowProject['g_img16']?>">
                        <img class="port-gallery-pic8 image" src="<?php echo "../upload/project/".$rowProject['g_img16']?>" /></a>
                </div>
            </div>

        </div>



        <div class="port-locate-sect clearfix">
            <div class="port-locate-title clearfix">
                <p class="port-locate-txt">
                    Location<br />
                </p>
            </div>

            <div class="port-locate-map clearfix">
                <iframe
                    src="<?php echo $rowProject['location'];?>"
                    width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="port-locate-facilities clearfix">
                <p class="port-locate-facilities-title">
                    Facilities around the project<br />
                </p>
            </div>
            <div class="port-locate-fac-content clearfix">
                <p class="port-locate-fac-l">
                    <?php echo $rowProject['facilities1_1'];?>
                </p>
                <p class="port-locate-fac-r">
                    <?php echo $rowProject['facilities1_2'];?>
                </p>
            </div>
        </div>

        <?php include("footer_pg.php"); ?>

    </div>
</body>

</html>