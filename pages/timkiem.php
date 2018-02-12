<?php
if(isset($_GET['q']))
{
  $tukhoa = $_GET['q'];
}
$tin = TimKiem($tukhoa);

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
if (isset($idLT))
{
  $tongsotin = SoTinTheoLoaiTin($idLT);
}
if (isset($tongsotin) && isset($sotin1trang))
{
  $tongsotrang = ceil($tongsotin / $sotin1trang);
}
if (isset($tongsotrang))
{
  for ($i = 1; $i <= $tongsotrang; $i++)
  {
  ?>
    <a <?php if ($i == $trang) echo "style ='background-color: red;'"; ?>
    } href="./index.php?p=tintrongloai&idLT=<?php echo $idLT; ?>&trang=<?php echo $i; ?>"><?php echo $i ?></a>
  <?php
  }
}
?>
</div>
