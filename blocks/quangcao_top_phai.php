<?php
  $quangcao = QuangCao(1);
  foreach ($quangcao as $qc) {
?>
    <a href="<?php echo $qc['Url']; ?>"></a>
    <img width="280" src="images/<?php echo $qc['urlHinh']; ?>" />
    <div style="height:10px"></div>
<?php
  }
?>
