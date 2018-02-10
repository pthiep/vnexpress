<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
				<a href="#">Tin Xem Nhiều</a>
      </div>

        <div class="clear"></div>
        <div class="cat-content">
        	<?php
						$tinxemnhieunhat = TinXemNhieuNhat();
						foreach($tinxemnhieunhat as $tin)
						{
					?>
                <div class="col1">
                    <div class="news">
                      <img class="images_news" src="upload/tintuc/<?php echo $tin['urlHinh']; ?>"  />
                        <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $tin['idTin']; ?>"><?php echo $tin['TieuDe']; ?></a><span class="hit"><?php echo $tin['SoLanXem']; ?></span></h3>
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
