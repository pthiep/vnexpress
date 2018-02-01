<div id="slide-left">
        	<div id="slideleft-main">
            	<?php
					$tinmoinhat_mottin = Tinmoinhat_Mottin();
				?>
                <img src="upload/tintuc/<?php echo $tinmoinhat_mottin[0]["urlHinh"]; ?>"  /><br />
                <h2 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $tinmoinhat_mottin[0]["idTin"]; ?>"><?php echo $tinmoinhat_mottin[0]["TieuDe"]; ?></a> </h2>
                <div class="des">
                    <?php echo $tinmoinhat_mottin[0]["TomTat"]; ?>
                </div>
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
            	<?php
					$bontinmoi = Tinmoinhat_Bontin();
					foreach($bontinmoi as $tin)
					{
				?>					
					   <li>
						<div class="title_news">
							<a href="index.php?p=chitiettin&idTin=<?php echo $tin["idTin"]; ?>" class="txt_link"><?php echo $tin["TieuDe"]; ?></a> 
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


     