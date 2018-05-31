<?php
  $tinmoinhat_mottin = TinMoiNhat_MotTin();
  $row_tinmoinhat_mottin = mysqli_fetch_array($tinmoinhat_mottin,MYSQLI_ASSOC);

?>

    <div id="slide-left">
        <div id="slideleft-main">
            <img src="upload/tintuc/<?php echo $row_tinmoinhat_mottin['urlImage']?>" />
            <br />
            <h2 class="title"><a href="index.php?p=chitiettin&id=<?php echo $row_tinmoinhat_mottin['id'] ?>"><?php echo $row_tinmoinhat_mottin['title'] ?></a> </h2>
            <div class="des">
                <?php echo $row_tinmoinhat_mottin['summary'] ?>
            </div>
        </div>
        <div id="slideleft-scroll">

            <div class="content_scoller width_common">
                <ul>
                  <?php
                    $tamtin = TinMoiNhat_TamTin();
                    while($row_tinmoinhat_tamtin = mysqli_fetch_array($tamtin,MYSQLI_ASSOC)){
                  ?>
                    <li>
                        <div class="title_news">
                            <a href="index.php?p=chitiettin&id=<?php echo $row_tinmoinhat_tamtin['id'] ?>" class="txt_link"><?php echo $row_tinmoinhat_tamtin['title'] ?></a>
                        </div>
                    </li>
                  <?php
                  }
                  ?>
                </ul>
            </div>

            <div id="gocnhin">
                <img alt="" src="http://khoapham.vn/images/logoKhoaPham.png" width="100%"></a>
                <div class="title_news"></div>
            </div>

        </div>
    </div>