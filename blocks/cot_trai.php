<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#">Tin xem nhiều</a>
        </div>

        <div class="clear"></div>
        <div class="cat-content">
            <?php
                $tinxemnhieu = TinXemNhieu();
                while($row = mysqli_fetch_array($tinxemnhieu)){
            ?>
                <div class="col1">
                    <div class="news">
                        <img class="images_news" src="upload/tintuc/<?php echo $row['urlImage']?>" />
                        <h3 class="title"><a href="index.php?p=chitiettin&id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a><span class="hit"><?php echo $row['qtyView'] ?></span></h3>
                        <div class="clear"></div>
                    </div>
                </div>
            <?php
                } 
            ?>  
        </div>
    </div>
</div>
<div class="clear"></div>