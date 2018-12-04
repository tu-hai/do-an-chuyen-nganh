<div id="slide-left">
    <?php
      $tinmoinhat_mottin = TinMoiNhat_MotTin();
      $row_tinmoinhat_motin = mysql_fetch_array($tinmoinhat_mottin);
    ?>

      <div id="slideleft-main">
           <img src="upload/tintuc/<?php echo  $row_tinmoinhat_motin['urlHinh']?> "   /><br />
           <h2 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_motin['idTin']?>"><?php echo  $row_tinmoinhat_motin['TieuDe'] ?></a> </h2>
                <div class="des">
                    <?php echo  $row_tinmoinhat_motin['TomTat'] ?>
               </div>   
      </div>

      <div id="slideleft-scroll">         	
        <div class="width_common">
            <ul>
              <?php
                $sautinmoi= TinMoiNhat_SauTin();
                while ($row_sautinmoi = mysql_fetch_array($sautinmoi)) {
                
              ?>
               <li>
                <div class="title_news">
               		<a href="index.php?p=chitiettin&idTin=<?php echo  $row_sautinmoi['idTin'] ?>" class="txt_link"> <?php  echo $row_sautinmoi['TieuDe']?>  
                  </a> 
                </div>
              </li>
                 <?php
                 }
                 ?>
            </ul>
        </div>			
            
			<div id="gocnhin">
                <img alt="" src="fb.com/hgiveup301" width="100%"></a>
                <div class="title_news"></div>
      </div>
                
   </div>
</div>



     