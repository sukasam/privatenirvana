<?php
include_once("../include/app_top.php");
?>
<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="pr_news.css">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">
</head>

<body>

    <div class="primaryContainer clearfix">

        <?php include("top_pg.php"); ?>

        <div class="port-banner-sect clearfix">
            <div class="port-baner-title clearfix">
                <p class="port-baner-txt">
                    PR News<br />
                </p>
                <p class="port-baner-txt1">
                    Find our project updates
                </p>
            </div>
        </div>
        <div class="news-content-sect clearfix">
            <div class="news-content-details clearfix">

                <div class="news-content-nav clearfix">

                <?php 
                        $quMenuNews = mysqli_query($conn,"SELECT * FROM `s_news` WHERE `status` = 0
                        GROUP BY `news_month`
                        ORDER BY `create_date` DESC");

                        while($rowMenuNews = mysqli_fetch_array($quMenuNews,MYSQLI_ASSOC)){

                            $originalDateNews = strtotime($rowMenuNews['create_date']);
                            $newDateNews = date("M Y", $originalDateNews);
                            $newDateNewsS = date("Y-m", $originalDateNews);

                            ?>
                            <a href="?newsMonth=<?php echo $newDateNewsS;?>"><div class="news-month-list">
                                <div class="news-content-month"><?php echo dateThai2($newDateNews);?></div>
                            </div></a>
                            <?php
                        }

                    ?>

                    <div class="news-month-select">
                        <select onchange="selectMonth(this)" id="monthSl">
                            <?php
                            $quMenuNews2 = mysqli_query($conn,"SELECT * FROM `s_news` WHERE `status` = 0
                            GROUP BY `news_month`
                            ORDER BY `create_date` DESC");
    
                            while($rowMenuNews2 = mysqli_fetch_array($quMenuNews2,MYSQLI_ASSOC)){

                                $originalDateNews2 = strtotime($rowMenuNews2['create_date']);
                                $newDateNews2 = date("M Y", $originalDateNews2);
                                $newDateNewsS2 = date("Y-m", $originalDateNews2);

                            ?>
                            <option value="?newsMonth=<?php echo $newDateNewsS2;?>" <?php if($_GET['newsMonth'] === $newDateNewsS2){echo 'selected="selected"';}?>><?php echo dateThai2($newDateNews2);?></option>
                            <?php }?>
                        </select>
                    </div>

                    <script>
                    function selectMonth(a) {
                        var x = (a.value || a.options[a.selectedIndex].value);  //crossbrowser solution =)
                        window.location = x;
                    }
                    </script>

                </div>

                <div class="news-content-info clearfix">

                <?php
                    $condition = "";
                    $conLimit = "";
                    if(isset($_GET['newsMonth']) && $_GET['newsMonth'] != ""){
                        $condition = " AND `create_date` LIKE '".$_GET['newsMonth']."%'";
                    }else{
                        $conLimit = " LIMIT 0, 10";
                    }
                    $quNews = mysqli_query($conn,"SELECT * FROM s_news WHERE status = 0 ".$condition." ORDER BY sorts,news_id DESC".$conLimit);
                    $numNews = mysqli_num_rows($quNews);
                    ?>

                    <p class="news-content-title">
                        <span class="textspan">ข่าวล่าสุด</span><br /><span class="textspan1"><?php echo $numNews;?> รายการ</span>
                    </p>

                    <?php
                    while($rowNews = mysqli_fetch_array($quNews,MYSQLI_ASSOC)){

                        $originalDate = strtotime($rowNews['create_date']);
                        $newDate = date("M d, Y", $originalDate);

                        ?>
                        <!-- News -->
                        <a href="pr_news_details.php?news_id=<?php echo $rowNews['news_id'];?>">
                        <div class="news-content-list clearfix">
                            <div class="news-list-pic clearfix">
                                <img class="news-list-img image" src="prnews/news_cover_01.jpg" />
                            </div>
                            <p class="news-list-content">
                                <span class="news-list-title"><?php echo stripslashes($rowNews['news_name_native']);?></span><br />
                                <span class="news-list-date"><?php echo dateThai1($newDate);?></span><br />
                            </p>
                        </div>
                        </a>
                        <!-- News -->
                    <?php
                    }
                    ?>

<!-- News -->
                    <div class="news-content-list clearfix" style="display:none;">
                        <div class="news-list-pic clearfix">
                            <img class="news-list-img image" src="img/Pnre11.jpg" />
                        </div>
                        <p class="news-list-content">
                            <span class="news-list-title">Private Nirvana East &quot;Ville Life Style
                                Addict&quot;</span><br />
                            <span class="news-list-date">Feb 4, 2019</span><br />
                        </p>
                    </div>
<!-- News -->


                </div>
            </div>
        </div>

        <?php include("footer_pg.php"); ?>

    </div>
</body>

</html>