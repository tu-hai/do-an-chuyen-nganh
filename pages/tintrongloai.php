  <?php
         $idLT = $_GET["idLT"];
        settype($idLT,"int");
  ?>    

  <?php
        $tenloaitin = HienTieuDeLoaiTinDangXem($idLT)
        $row_tenloaitin = mysql_fetch_array($tenloaitin);
  ?>
    <div class="tieudetin">
        Trang chủ >> <?php echo $row_bc["TenTL"]  ?>    
    </div>

  <?php
             $loaitin = TheLoaiTin($idLT);
           while ( $row_loaitin = mysql_fetch_array($loaitin) )
            {     
  ?> 
                <div class="box-cat">
                	<div class="cat1">
                    	
                        <div class="clear"></div>
                        <div class="cat-content">
                        	<div class="col0 col1">
                            	<div class="news">
                                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_loaitin["idTin"] ?>"> <?php echo $row_loaitin['TieuDe'] ?> </a></h3>
                                    <img class="images_news" src="upload/tintuc/<?php echo $row_loaitin['urlHinh'] ?>" align="left" />
                                    <div class="des"><?php echo $row_loaitin['TomTat'] ?></div>
                                    <div class="clear"></div>
                                   
                				</div>
                            </div>
                        </div>
                    </div>
                </div>
 <?php 
    } // đóng while
 ?>   