<div class="thongtin-title">
	<div class="right">

          <a href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>

          <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>

    </div>
</div>

<div class="thongtin-content">

<?php
	$theloai = DanhSachTheLoai();
	foreach ($theloai as $tl) {
?>
	<ul class="ulBlockMenu">
                <li class="liFirst">
                   <h2>
                      <a class="mnu_giaoduc" href="/tin-tuc/giao-duc/"><?php echo $tl['TenTL']; ?></a>
                   </h2>
                </li>
								<?php
									$idTL = $tl['idTL'];
									$loaitin = DanhSachLoaiTin_Theo_TheLoai($idTL);
									foreach ($loaitin as $lt) {
								?>
                <li class="liFollow">
                   <h2>
                      <a href="./index.php?p=tintrongloai&idLT=<?php echo $lt['idLT']; ?>"><?php echo $lt['Ten']; ?></a>
                   </h2>
                </li>
								<?php
									}
								?>
             </ul>
					<?php
						}
					?>

</div>
