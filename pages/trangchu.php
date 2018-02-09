<?php
 $theloai = DanhSachTheLoai();
 foreach ($theloai as $tl) {
	 $idTL = $tl['idTL'];
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $tl['TenTL']; ?></a>
        </div>
        <div class="child-cat">
					<?php
				 		$loaitin = DanhSachLoaiTin_Theo_TheLoai($idTL);
				 		foreach ($loaitin as $lt) {
					?>
        		<a href="./index.php?p=tintrongloai&idLT=<?php echo $lt['idLT']; ?>"><?php echo $lt['Ten']; ?></a>
					<?php
						}
					?>
        </div>

        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
										<?php
											$tintrai = TinMoi_BenTrai($idTL)[0];
										?>
                    <h3 class="title" ><a href="./index.php?p=chitiettin&idTin=<?php echo $tintrai['idTin']; ?>"><?php echo $tintrai['TieuDe']; ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $tintrai['urlHinh']; ?>" align="left" />
                    <div class="des"><?php echo $tintrai['TomTat']; ?></div>
                    <div class="clear"></div>

				</div>
            </div>
            <div class="col2">
							<?php
								$tinphai = TinMoi_BenPhai($idTL);
								foreach ($tinphai as $tin) {
							?>
             <p class="tlq"><a href="./index.php?p=chitiettin&idTin=<?php echo $tin['idTin']; ?>"><?php echo $tin['TieuDe']; ?></a>
                </a></p>
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
