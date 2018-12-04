<!-- box cat -->
<div class="container" style="display: inline-table;">
  <?php 
    $idLT = rand(1,5);
    do{
        $idLT1 = rand(1,5);
    }while($idLT===$idLT1);

    do{
        $idLT2 = rand(1,5);
    }while($idLT===$idLT2 || $idLT1===$idLT2);

 ?>

<!-- //start box cat -->
<div class="box-cat">
    <div class="cat" style="
    display: inline-table;
">
        <div class="main-cat">
        <?php 
            $laytieude = LayTenLoaiTin($idLT);
            $row_laytieude = mysql_fetch_array($laytieude);
         ?>
            <a href="#"><?php echo $row_laytieude['Ten'] ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                <?php 
                    $laytinmoi = TinMoiNhat_TheoLoaiTin_MotTin($idLT);
                    $row_laytinmoi = mysql_fetch_array($laytinmoi);
                 ?>
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_laytinmoi['idTin'] ?>"> <?php echo $row_laytinmoi['TieuDe'] ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_laytinmoi['urlHinh'] ?>" align="left" />
                    <div class="des">  <?php echo $row_laytinmoi['TomTat'] ?> </div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <?php 
                 $lay4tinmoi = TinMoiNhat_TheoLoaiTin_BonTin($idLT);
                  
                  while ($row_lay4tinmoi = mysql_fetch_array($lay4tinmoi)) {
                  
             ?>
            <div class="col2">
            
            <h3 class="tlq"><a href="#"><?php echo $row_lay4tinmoi['TieuDe'] ?> </a></h3>
            

            </div> 
           <?php
            }
           ?>
        </div>
    
    </div>    <!--   block 1 -->


    <!-- ------------------- -->
   <?php 
    $idLT = rand(1,3);
    do{
        $idLT1 = rand(1,3);
    }while($idLT===$idLT1);

    do{
        $idLT2 = rand(1,3);
    }while($idLT===$idLT2 || $idLT1===$idLT2);

 ?>

<!-- //start box cat -->
<div class="box-cat">
    <div class="cat" style="
    display: inline-table;
">
        <div class="main-cat">
        <?php 
            $laytieude = LayTenLoaiTin($idLT);
            $row_laytieude = mysql_fetch_array($laytieude);
         ?>
            <a href="#"><?php echo $row_laytieude['Ten'] ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                <?php 
                    $laytinmoi = TinMoiNhat_TheoLoaiTin_MotTin($idLT);
                    $row_laytinmoi = mysql_fetch_array($laytinmoi);
                 ?>
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_laytinmoi['idTin'] ?>"> <?php echo $row_laytinmoi['TieuDe'] ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_laytinmoi['urlHinh'] ?>" align="left" />
                    <div class="des">  <?php echo $row_laytinmoi['TomTat'] ?> </div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <?php 
                 $lay4tinmoi = TinMoiNhat_TheoLoaiTin_BonTin($idLT);
                  
                  while ($row_lay4tinmoi = mysql_fetch_array($lay4tinmoi)) {
                  
             ?>
            <div class="col2">
            
            <h3 class="tlq"><a href=""><?php echo $row_lay4tinmoi['TieuDe'] ?> </a></h3>
            

            </div> 
           <?php
            }
           ?>
        </div>
    
    </div>
   

</div>
<!-- //box cat -->

</div>
<!-- //box cat -->
<?php 
    $idLT = rand(1,5);
    do{
        $idLT1 = rand(1,5);
    }while($idLT===$idLT1);

    do{
        $idLT2 = rand(1,5);
    }while($idLT===$idLT2 || $idLT1===$idLT2);

 ?>

<!-- //start box cat -->
<div class="box-cat">
    <div class="cat" style="
    display: inline-table;
">
        <div class="main-cat">
        <?php 
            $laytieude = LayTenLoaiTin($idLT);
            $row_laytieude = mysql_fetch_array($laytieude);
         ?>
            <a href="#"><?php echo $row_laytieude['Ten'] ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                <?php 
                    $laytinmoi = TinMoiNhat_TheoLoaiTin_MotTin($idLT);
                    $row_laytinmoi = mysql_fetch_array($laytinmoi);
                 ?>
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_laytinmoi['idTin'] ?>"> <?php echo $row_laytinmoi['TieuDe'] ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_laytinmoi['urlHinh'] ?>" align="left" />
                    <div class="des">  <?php echo $row_laytinmoi['TomTat'] ?> </div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <?php 
                 $lay4tinmoi = TinMoiNhat_TheoLoaiTin_BonTin($idLT);
                  
                  while ($row_lay4tinmoi = mysql_fetch_array($lay4tinmoi)) {
                  
             ?>
            <div class="col2">
            
            <h3 class="tlq"><a href="#"><?php echo $row_lay4tinmoi['TieuDe'] ?> </a></h3>
            

            </div> 
           <?php
            }
           ?>
        </div>
    
    </div>
   

</div>
<!-- //box cat --><?php 
    $idLT = rand(1,4);
    do{
        $idLT1 = rand(1,4);
    }while($idLT===$idLT1);

    do{
        $idLT2 = rand(1,4);
    }while($idLT===$idLT2 || $idLT1===$idLT2);

 ?>

<!-- //start box cat -->
<div class="box-cat">
    <div class="cat" style="
    display: inline-table;
">
        <div class="main-cat">
        <?php 
            $laytieude = LayTenLoaiTin($idLT);
            $row_laytieude = mysql_fetch_array($laytieude);
         ?>
            <a href="#"><?php echo $row_laytieude['Ten'] ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                <?php 
                    $laytinmoi = TinMoiNhat_TheoLoaiTin_MotTin($idLT);
                    $row_laytinmoi = mysql_fetch_array($laytinmoi);
                 ?>
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_laytinmoi['idTin'] ?>"> <?php echo $row_laytinmoi['TieuDe'] ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_laytinmoi['urlHinh'] ?>" align="left" />
                    <div class="des">  <?php echo $row_laytinmoi['TomTat'] ?> </div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <?php 
                 $lay4tinmoi = TinMoiNhat_TheoLoaiTin_BonTin($idLT);
                  
                  while ($row_lay4tinmoi = mysql_fetch_array($lay4tinmoi)) {
                  
             ?>
            <div class="col2">
            
            <h3 class="tlq"><a href="#"><?php echo $row_lay4tinmoi['TieuDe'] ?> </a></h3>
            

            </div> 
           <?php
            }
           ?>
        </div>
    
    </div>
   

</div>
<!-- //box cat -->
</div> <!-- đóng container
 -->


