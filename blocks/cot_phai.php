<!-- box cat -->
<?php
    $id = 1;
    $tintheoloaitin_mottin = TinTheoLoaiTin_MotTin($id);
    $row_mottin = mysqli_fetch_array($tintheoloaitin_mottin);
    $tenloaitin = TenLoaiTin($id);
    $row_tenloaitin = mysqli_fetch_array($tenloaitin);
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#">
                <?php echo $row_tenloaitin['name'] ?>
            </a>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                    <h3 class="title"><a href="#"><?php echo $row_mottin['title']?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_mottin['urlImage'] ?>" align="left" />
                    <div class="des">
                        <?php echo $row_mottin['summary'] ?>
                    </div>
                    <div class="clear"></div>

                </div>
            </div>
            <div class="col2">
                <?php
            $tintheoloai_bontin = TinTheoLoaiTin_BonTin($id);
            while($row_bontin = mysqli_fetch_array($tintheoloai_bontin)){
        ?>
                    <h3 class="tlq"><a href="#"><?php echo $row_bontin['title'] ?></a></h3>
                    <?php
            }

        ?>

            </div>

        </div>

    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
<?php
    $id = 2;
    $tintheoloaitin_mottin = TinTheoLoaiTin_MotTin($id);
    $row_mottin = mysqli_fetch_array($tintheoloaitin_mottin);
    $tenloaitin = TenLoaiTin($id);
    $row_tenloaitin = mysqli_fetch_array($tenloaitin);
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#">
                <?php echo $row_tenloaitin['name'] ?>
            </a>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                    <h3 class="title"><a href="#"><?php echo $row_mottin['title']?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_mottin['urlImage'] ?>" align="left" />
                    <div class="des">
                        <?php echo $row_mottin['summary'] ?>
                    </div>
                    <div class="clear"></div>

                </div>
            </div>
            <div class="col2">
                <?php
            $tintheoloai_bontin = TinTheoLoaiTin_BonTin($id);
            while($row_bontin = mysqli_fetch_array($tintheoloai_bontin)){
        ?>
                    <h3 class="tlq"><a href="#"><?php echo $row_bontin['title'] ?></a></h3>
                    <?php
            }

        ?>

            </div>

        </div>

    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
<?php
    $id = 3;
    $tintheoloaitin_mottin = TinTheoLoaiTin_MotTin($id);
    $row_mottin = mysqli_fetch_array($tintheoloaitin_mottin);
    $tenloaitin = TenLoaiTin($id);
    $row_tenloaitin = mysqli_fetch_array($tenloaitin);
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#">
                <?php echo $row_tenloaitin['name'] ?>
            </a>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                    <h3 class="title"><a href="#"><?php echo $row_mottin['title']?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_mottin['urlImage'] ?>" align="left" />
                    <div class="des">
                        <?php echo $row_mottin['summary'] ?>
                    </div>
                    <div class="clear"></div>

                </div>
            </div>
            <div class="col2">
                <?php
            $tintheoloai_bontin = TinTheoLoaiTin_BonTin($id);
            while($row_bontin = mysqli_fetch_array($tintheoloai_bontin)){
        ?>
                    <h3 class="tlq"><a href="#"><?php echo $row_bontin['title'] ?></a></h3>
                    <?php
            }

        ?>

            </div>

        </div>

    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
