<?php
    $theloai = DanhSachTheLoai();
    while($row_theloai = mysqli_fetch_array($theloai)){
?>
    <div class="box-cat">
        <div class="cat">
            <div class="main-cat">
                <a href="#"><?php echo $row_theloai['name'] ?></a>
            </div>
            <div class="child-cat">
                <?php
                    $loaitin = DanhSachLoaiTinTheoTheLoai($row_theloai['id']);
                    while($row_loaitin = mysqli_fetch_array($loaitin)){
                ?>
                    <a href="#"><?php echo $row_loaitin['name'] ?></a>
                <?php        
                    }
                ?>
            </div>
            <div class="clear"></div>
            <div class="cat-content">
                <div class="col1">
                    <div class="news">
                        <?php
                            $mottin = TinTheoTheLoai_MotTin($row_theloai['id']);
                            $row_mottin = mysqli_fetch_array($mottin);
                        ?>
                        <h3 class="title" ><a href="#"><?php echo $row_mottin['title'] ?> </a></h3>
                        <img class="images_news" src="upload/tintuc/<?php echo $row_mottin['urlImage'] ?>" align="left" />
                        <div class="des"><?php echo $row_mottin['summary'] ?></div>
                        <div class="clear"></div>
                       
                    </div>
                </div>
                <div class="col2">
                    <?php
                        $bontin = TinTheoTheLoai_BonTin($row_theloai['id']);
                        while($row_bontin = mysqli_fetch_array($bontin)){
                    ?>
                        <p class="tlq"><a href="#"><?php echo $row_bontin['title'] ?></a></p>
                    <?php
                        }
                    ?>
                    
                </div>    
            </div>
        </div>
    </div>
    <div class="clear"></div>
<?php        
    }
?>



