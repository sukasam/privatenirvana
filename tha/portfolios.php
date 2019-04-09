<?php
include_once("../include/app_top.php");
?>
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
            โครงการของเรา
            </p>
            <div class="house-project-btn clearfix">

            <div class="filter-thumb">
                <a href="#all" class="filter-thumb-all"><i class="icon icon-home3 txt-20"></i></a>
                <!-- <a href="#singlehouse">บ้านเดี่ยว</a>
                <a href="#twinhouse">บ้านแฝด</a>
                <a href="#townhome">ทาวน์โฮม</a> -->
                <?php
                $quMenuPro = mysqli_query($conn,"SELECT * FROM `s_project_group` WHERE `status` = 0 ORDER BY sorts,project_id DESC");

                while($rowMenuPro = mysqli_fetch_array($quMenuPro,MYSQLI_ASSOC)){
                    ?>
                    <a href="#box<?php echo $rowMenuPro['project_id'];?>"><?php echo $rowMenuPro['project_name_native'];?></a>
                    <?php
                }
                ?>
            </div>


            </div>
            <div class="house-project-type filter-gallery clearfix">
                
            <?php
                $quPro = mysqli_query($conn,"SELECT * FROM `s_project` WHERE `status` = 0 ORDER BY sorts,project_id DESC");

                while($rowPro = mysqli_fetch_array($quPro,MYSQLI_ASSOC)){
                    ?>
                    <a href="portfolios_detail.php?project_id=<?php echo $rowPro['project_id'];?>" class="box<?php echo $rowPro['project_group'];?>">
                        <div class="house-type clearfix">
                            <div class="house-type-img clearfix">
                                <img class="port-img-thumbs" src="<?php echo "../upload/project/".$rowPro['images'];?>" />
                            </div>
                            <p class="house-type-txt">
                            <span class="house-type-txt-sp"><?php echo $rowPro['project_name_native'];?></span><br /><span class="house-type-sub-sp"><?php echo getProjectGroup($conn,$rowPro['project_group'],'th');?></span>
                            </p>
                        </div>
                    </a>
                    <?php
                }
            ?>
            
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