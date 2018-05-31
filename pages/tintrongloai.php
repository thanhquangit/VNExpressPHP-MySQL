<?php
    $id = $_GET["type"];
    $loaitin = breadCrumb($id);
    $row_loaitin = mysqli_fetch_array($loaitin);
?>
<div class="row">
<a href="./">Trang chủ</a> >> <a href=""><?php echo $row_loaitin['category_name'] ?></a> >> <a href="index.php?p=tintrongloai&type=<?php echo $row_loaitin['id'] ?>"><?php echo $row_loaitin['name_type'] ?></a>
</div>
<?php
    $sotin = 6;
    if (isset($_GET['trang'])){
        $trang=$_GET['trang'];
    }
    else
        $trang=1;
    $from = ($trang-1) * $sotin;
    $tintuc = TinTheoLoaiTin_PhanTrang($id, $from, $sotin);
    while($row_tintuc = mysqli_fetch_array($tintuc)){
?>

<div class="box-cat">
    <div class="cat1">
        
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col0 col1">
                <div class="news">
                    <h3 class="title" ><a href="index.php?p=chitiettin&id=<?php echo $row_tintuc['id'] ?>"><?php echo $row_tintuc['title']?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tintuc['urlImage']?>" align="left" />
                    <div class="des"><?php echo $row_tintuc['summary'] ?></div>
                    <div class="clear"></div>
                   
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php
    }
?>
<div id="phantrang">
<?php
    $t = DanhSachTinTheoLoaiTin($id);
    $tongsotin = mysqli_num_rows($t);
    $tongsotrang = ceil($tongsotin/$sotin);
    for($i=1; $i<=$tongsotrang;$i++){
?>

    <a href="index.php?p=tintrongloai&type=<?php echo $id ?>&trang=<?php echo $i ?>"><?php echo $i ?></a>

<?php        
    }
?>
</div>
<style type="text/css">
    #phantrang{
        text-align: center;
    }
    #phantrang>a{
        background: #000;
        padding: 3px;
        color: white;
    }
</style>
