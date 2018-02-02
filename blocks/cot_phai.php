<!-- box cat -->
<?php
	$idLT = 5;
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo TenLoaiTin($idLT); ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<?php
				$mottin = Tinmoinhat_TheoLoaiTin_Mottin($idLT);
			?>
            <div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="#"><?php echo $mottin[0]['TieuDe']; ?></a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $mottin[0]['urlHinh']; ?>" align="left" />
                    <div class="des"><?php echo $mottin[0]['TomTat']; ?></div>
                             
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            	<?php
					$tinmoi_bontin = Tinmoinhat_TheoLoaiTin_Bontin($idLT);
					foreach($tinmoi_bontin as $tin)
					{
				?>
           				<h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $tin['idTin']; ?>"><?php echo $tin['TieuDe']; ?></a></h3>
                <?php
					}
				?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

<!-- box cat -->
<?php
	$idLT = 3;
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo TenLoaiTin($idLT); ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<?php
				$mottin = Tinmoinhat_TheoLoaiTin_Mottin($idLT);
			?>
            <div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="#"><?php echo $mottin[0]['TieuDe']; ?></a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $mottin[0]['urlHinh']; ?>" align="left" />
                    <div class="des"><?php echo $mottin[0]['TomTat']; ?></div>
                             
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            	<?php
					$tinmoi_bontin = Tinmoinhat_TheoLoaiTin_Bontin($idLT);
					foreach($tinmoi_bontin as $tin)
					{
				?>
           				<h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $tin['idTin']; ?>"><?php echo $tin['TieuDe']; ?></a></h3>
                <?php
					}
				?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

<!-- box cat -->
<?php
	$idLT = 7;
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo TenLoaiTin($idLT); ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<?php
				$mottin = Tinmoinhat_TheoLoaiTin_Mottin($idLT);
			?>
            <div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="#"><?php echo $mottin[0]['TieuDe']; ?></a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $mottin[0]['urlHinh']; ?>" align="left" />
                    <div class="des"><?php echo $mottin[0]['TomTat']; ?></div>
                             
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            	<?php
					$tinmoi_bontin = Tinmoinhat_TheoLoaiTin_Bontin($idLT);
					foreach($tinmoi_bontin as $tin)
					{
				?>
           				<h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $tin['idTin']; ?>"><?php echo $tin['TieuDe']; ?></a></h3>
                <?php
					}
				?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->