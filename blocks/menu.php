 <?php 
    $theloai =  DanhSachTheLoaiMenu() ;
    while($row_theloai = mysql_fetch_array($theloai))
     {
        $idTL = $row_theloai['idTL'];
    
  ?>
<ul class="width_common" id="menu_web">
          <li class="active"><a href="./"><img class="logo_icon_home" alt="" src="images/img_logo_home.gif"></a></li>
          
          
               <?php 
               		
		            while($row_theloai=mysql_fetch_array($theloai))
		            {
		       ?>    
		                <li>
		                   <a href="index.php?p=menutheloai&idTL=<?php echo  $row_theloai['idTL'] ?>" class="mnu_thoisu"><?php echo $row_theloai['TenTL'] ?></a>
		                </li>
		        <?php
		                } //đóng while
		        ?>
 
</ul>
 <?php 
      } // đóng while
    ?>         
