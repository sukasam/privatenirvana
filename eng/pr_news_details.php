<?php
include_once("../include/app_top.php");
if(!isset($_GET['news_id']) || $_GET['news_id'] == ""){
    header("Location:pr_news.php");
}
$rowNews = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM s_news WHERE news_id = ".$_GET['news_id']),MYSQLI_ASSOC);
$originalDate = strtotime($rowNews['create_date']);
$newDate = date("M d, Y", $originalDate);
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

                    <div class="news-month-list">
                        <div class="news-content-month">March 2019</div>
                    </div>

                    <div class="news-month-select">
                        <select>
                            <option value="February2019">March 2019</option>
                        </select>
                    </div>

                </div>

                <div class="news-content-info clearfix">
                    <div class="news-main-title">
                        <span class="prnews_title"><?php echo stripslashes($rowNews['news_name']);?></span><br />
                        <span class="textspan1"><?php echo $newDate;?></span>
                    </div>


                    <div class="news-main-content clearfix">

                        <div class="news-contents-txt"><?php echo stripslashes($rowNews['news_desc']);?></div><br />
                    </div>


                    <div class="prnews_image_title">News Images</div>
                    <div class="prnews_image_gallery clearfix">

                        <?php
                        $quNewsG = mysqli_query($conn,"SELECT * FROM s_news_gallery WHERE news_id = ".$rowNews['news_id']." ORDER BY sorts,img_id DESC");
                        $numNewsG = mysqli_num_rows($quNewsG);

                        while($rowNewsG = mysqli_fetch_array($quNewsG,MYSQLI_ASSOC)){
                        ?>
                        <div class="prnews_image_pics">
                            <a data-fancybox="prnews001" data-caption="<?php echo stripslashes($rowNews['news_name']);?>" href="../upload/news/<?php echo $rowNews['news_id'];?>/<?php echo $rowNewsG['title_name'];?>">
                            <img src="../upload/news/<?php echo $rowNews['news_id'];?>/<?php echo $rowNewsG['title_name'];?>" class="img_prnews_thumbs"></a>
                        </div>
                        <?php }?>
                    </div>





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


                </div>
            </div>
        </div>

        <?php include("footer_pg.php"); ?>

    </div>
</body>

</html>