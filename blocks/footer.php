<div class="thongtin-title">
    <div class="right">
        <a href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>
        <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>
    </div>
</div>
<div class="thongtin-content">
    <?php 
        $theloai = DanhSachTheLoai();
        while($row_theloai = mysqli_fetch_array($theloai)){
    ?>
        <ul class="ulBlockMenu">
            <li class="liFirst">
                <h2><a class="mnu_giaoduc" href="/tin-tuc/giao-duc/"><?php echo $row_theloai['name'] ?></a></h2>
            </li>
            <?php
                $loaitin = DanhSachLoaiTinTheoTheLoai($row_theloai['id']);
                while($row_loaitin = mysqli_fetch_array($loaitin)){
            ?>
                <li class="liFollow">
                    <h2><a href="/tin-tuc/the-gioi/"><?php echo $row_loaitin['name'] ?></a></h2>
                </li>
            <?php
                }

            ?>
            
        </ul>
    <?php        
        }

    ?>
    
</div>