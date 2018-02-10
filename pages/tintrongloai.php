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
	$sotin1trang = 4;
	if (isset($_GET['trang']))
	{
		$trang = $_GET['trang'];
		settype($trang, "int");
	}
	else {
		$trang = 1;
	}
	$from = ($trang - 1) * $sotin1trang;
	$tin = TinTheoLoaiTin_PhanTrang($idLT, $from, $sotin1trang);

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
<div class	="phantrang">

<?php
	$tongsotin = SoTinTheoLoaiTin($idLT);
	$tongsotrang = ceil($tongsotin / $sotin1trang);
	for ($i = 1; $i <= $tongsotrang; $i++)
	{
?>
		<a <?php if ($i == $trang) echo "style ='background-color: red;'"; ?>
		} href="./index.php?p=tintrongloai&idLT=<?php echo $idLT; ?>&trang=<?php echo $i; ?>"><?php echo $i ?></a>
<?php
	}
?>
</div>
