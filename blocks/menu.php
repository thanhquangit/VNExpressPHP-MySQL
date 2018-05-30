<!-- Markup for mobile menu toggler. Hidden by default, only shown when in mobile menu mode -->
<a class="animateddrawer" id="ddsmoothmenu-mobiletoggle" href="#">
    <span></span>
</a>
<div id="smoothmenu1" class="ddsmoothmenu">
    <ul>
        <li><a href="./">Trang chủ</a></li>
        <?php 
        	$theloai = DanhSachTheLoai();
        	while($row_theloai = mysqli_fetch_array($theloai)){
        ?>
	        <li><a href=""><?php echo $row_theloai['name'] ?></a>
	            <ul>
	            	<?php 
	            		$loaitin = DanhSachLoaiTinTheoTheLoai($row_theloai['id']);
	            		while( $row_loaitin = mysqli_fetch_array($loaitin)){
	            	?>
						<li><a href="index.php?p=tintrongloai&type=<?php echo $row_loaitin['id'] ?>"><?php echo $row_loaitin['name'] ?></a></li>
	            	<?php		
	            		}
	            	?>
	            </ul>
	        </li>
        <?php		
        	}
        ?>
        
    </ul>
    <br style="clear: left" />
</div>