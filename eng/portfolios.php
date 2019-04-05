<!DOCTYPE html>
<html>


    <head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="portfolios.css">
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">
    </head>
    <body>

    <div class="primaryContainer clearfix">

    <?php include("top_pg.php"); ?>
    
        <div class="house-info-sect clearfix">
            <div class="house-baner-title clearfix">
                <p class="house-baner-txt">
                Portfolios
                </p>
                <p class="house-baner-txt1">
                Private Nirvana Projects
                </p>
            </div>
        </div>
        <div class="house-project-sect clearfix">
            <p class="house-project-title">
            Our Projects
            </p>
            <div class="house-project-btn clearfix">

            <div class="filter-thumb">
                <a href="#all" class="filter-thumb-all"><i class="icon icon-home3 txt-20"></i></a>
                <a href="#singlehouse">Single House</a>
                <a href="#twinhouse">Twin House</a>
                <a href="#townhome">Town Home</a>
            </div>


            </div>
            <div class="house-project-type filter-gallery clearfix">
            
            <a href="pn_residence_north_east.php" class="singlehouse">
            <div class="house-type clearfix">
                    <div class="house-type-img clearfix">
                        <img class="port-img-thumbs" src="img/Pnre01.jpg" />
                    </div>
                    <p class="house-type-txt">
                    <span class="house-type-txt-sp">Residence North &#x27;n East</span><br /><span class="house-type-sub-sp">Single House</span>
                    </p>
                </div>
                </a>
                
                <a href="pn_residence.php" class="singlehouse">
                <div class="house-type clearfix">
                    <div class="house-type-img clearfix">
                        <img class="port-img-thumbs" src="img/Pnre02.jpg" />
                    </div>
                    <p class="house-type-txt">
                    <span class="house-type-txt-sp">Residence</span><br /><span class="house-type-sub-sp">Single House</span>
                    </p>
                </div>
                </a>

                <a href="pn_kaset_navamin.php" class="singlehouse">
                <div class="house-type clearfix">
                    <div class="house-type-img clearfix">
                        <img class="port-img-thumbs" src="img/Pnre03.jpg" />
                    </div>
                    <p class="house-type-txt">
                    <span class="house-type-txt-sp">Kaset-Navamin</span><br /><span class="house-type-sub-sp">Single House</span>
                    </p>
                </div>
                </a>

                <a href="pn_ladprao.php" class="singlehouse">
                <div class="house-type clearfix">
                    <div class="house-type-img clearfix">
                        <img class="port-img-thumbs" src="img/Pnre04.jpg" />
                    </div>
                    <p class="house-type-txt">
                    <span class="house-type-txt-sp">Ladprao</span><br /><span class="house-type-sub-sp">Single House</span>
                    </p>
                </div>
                </a>

                <a href="pn_through.php" class="twinhouse">
                <div class="house-type clearfix">
                    <div class="house-type-img clearfix">
                        <img class="port-img-thumbs" src="img/Pnre05.jpg" />
                    </div>
                    <p class="house-type-txt">
                    <span class="house-type-txt-sp">Through</span><br /><span class="house-type-sub-sp">Twin House</span>
                    </p>
                </div>
                </a>

                <a href="pn_life_exclusive.php" class="townhome">
                <div class="house-type clearfix">
                    <div class="house-type-img clearfix">
                        <img class="port-img-thumbs" src="img/Pnre06.jpg" />
                    </div>
                    <p class="house-type-txt">
                    <span class="house-type-txt-sp">Life Exclusive</span><br /><span class="house-type-sub-sp">Town Home</span>
                    </p>
                </div>
                </a>

               <a href="pn_life_ladprao71.php" class="townhome">
                <div class="house-type clearfix">
                    <div class="house-type-img clearfix">
                        <img class="port-img-thumbs" src="img/Pnre07.jpg" />
                    </div>
                    <p class="house-type-txt">
                    <span class="house-type-txt-sp">Life Ladprao 71</span><br /><span class="house-type-sub-sp">Town Home</span>
                    </p>
                </div>
                </a>

            </div>
        </div>
        
        <?php include("footer_pg.php"); ?>

    </div>

    <script>

    $('.filter-thumb a').click(function (e) {
      e.preventDefault();
      var a = $(this).attr('href');
      a = a.substr(1);
      $('.filter-gallery a').each(function () {
        if (!$(this).hasClass(a) && a != 'all')
          $(this).addClass('hide', 1500);
        else
          $(this).removeClass('hide', 1500);
      });

    });

  </script>


    </body>
</html>