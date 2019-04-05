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
                    <p class="news-content-title">
                        <span class="textspan">Latest Update</span><br /><span class="textspan1">1 items</span>
                    </p>

<!-- News -->
                    <a href="pr_news_details.php">
                    <div class="news-content-list clearfix">
                        <div class="news-list-pic clearfix">
                            <img class="news-list-img image" src="prnews/news_cover_01.jpg" />
                        </div>
                        <p class="news-list-content">
                            <span class="news-list-title">บรรยากาศเปิดชมบ้าน Private Nirvana Through เอกมัย - รามอินทรา</span><br />
                            <span class="news-list-date">March 17, 2019</span><br />
                        </p>
                    </div>
                    </a>
<!-- News -->


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