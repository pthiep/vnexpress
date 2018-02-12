<?php
  if (isset($_GET['idTin']))
  {
    $idTin = $_GET['idTin'];
    settype($idTin, 'int');
  }
  else{
    $idTin = 1;
  }
  $tin = ChiTietTin($idTin)[0];
?>
<h1 class="title"><?php echo $tin['TieuDe']; ?></h1>
<div class="des">
<?php echo $tin['TomTat']; ?></div>
<div class="chitiet">
<!--noi dung-->
  <table align="center" border="0" cellpadding="3" cellspacing="0">
  <tbody>
    <tr>
      <td><img alt="" data-natural-="" src="./upload/tintuc/<?php echo $tin['urlHinh']; ?>" data-width="500" data-pwidth="480"></td>
    </tr>
    <tr>
      <td><p><?php echo $tin['Content']; ?></p></td>
    </tr>
  </tbody>
</table>
<!--//noi dung-->
</div>
<div class="clear"></div>
<a class="btn_quantam" id="vne-like-anchor-1000000-3023795" href="#" total-like="<?php echo $tin['SoLan']; ?>"></a>
<div class="number_count"><span id="like-total-1000000-3023795"><?php echo $tin['SoLanXem']; ?></span></div>
<!--face-->
<div class="left"><div class="fb-like fb_iframe_widget" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-href="http://vnexpress.net/tin-tuc/the-gioi/ukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;href=http%3A%2F%2Fvnexpress.net%2Ftin-tuc%2Fthe-gioi%2Fukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=true&amp;width=450"></div></div>
<!--twister-->
<div class="left"></div>
<!--google-->
<div class="left"><div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"></div></div>

<div class="clear"></div>
<div id="tincungloai">
<div class="clear"></div>
	<ul>

        <li>
             <a href="#"><img src="upload/tintuc/19-2436-1406522072_300x180.jpg" alt="Người nhà nạn nhân MH370 an ủi thân nhân hành khách MH17"></a> <br />
 			 <a class="title" href="#">Người nhà nạn nhân MH370 an ủi thân nhân hành khách MH17</a>
             <span class="no_wrap">
        </li>

        <li>
             <a href="#"><img src="upload/tintuc/19-2436-1406522072_300x180.jpg" alt="Người nhà nạn nhân MH370 an ủi thân nhân hành khách MH17"></a> <br />
 			 <a class="title" href="#">Người nhà nạn nhân MH370 an ủi thân nhân hành khách MH17</a>
             <span class="no_wrap">
        </li>

        <li>
             <a href="#"><img src="upload/tintuc/19-2436-1406522072_300x180.jpg" alt="Người nhà nạn nhân MH370 an ủi thân nhân hành khách MH17"></a> <br />
 			 <a class="title" href="#">Người nhà nạn nhân MH370 an ủi thân nhân hành khách MH17</a>
             <span class="no_wrap">
        </li>


    </ul>
</div>
<div class="clear"></div>
