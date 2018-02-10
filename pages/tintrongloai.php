<?php
	$idLT = $_GET['idLT'];
	settype($idLT, "int");
?>
<?php
	$bc= breadCrumb($idLT);
?>
<div>
	Trang chủ >> <?php echo $bc[0]['TenTL']; ?> >> <?php echo $bc[0]['Ten']; ?>
</div>
<?php
	$tin = TinTheoLoaiTin($idLT);

	foreach ($tin as $lt) {
?>
<div class="box-cat">
	<div class="cat1">

        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="./index.php?p=chitiettin&idTin=<?php echo $lt['idTin']; ?>"><?php echo $lt['TieuDe']; ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $lt['urlHinh']; ?>" align="left" />
                    <div class="des"><?php echo $lt['TomTat']; ?></div>
                    <div class="clear"></div>

				</div>
            </div>

        </div>
    </div>
</div>

<div class="clear"></div>

<?php
	}
?>
<!-- box cat-->
