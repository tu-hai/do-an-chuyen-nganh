<?php
    $theloai = DanhSachTheLoai();
    While($row_theloai= mysql_fetch_array($theloai))
        {
            $idTL = $row_theloai['idTL'];
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $row_theloai['TenTL']?></a>
        </div>
        <div class="child-cat">
        	<?php 
                $loaitin = DanhSachLoaiTin_Theo_TheLoai($idTL);
                while ($row_loaitin = mysql_fetch_array($loaitin))
                 { 
                    
            ?>
            <a href="./index.php?p=tintrongloai&idLT=<?php echo $row_loaitin['idLT'] ?>"><?php echo $row_loaitin['Ten'] ?></a>
            <?php
                } //đóng whhile
            ?>
        </div>

        <div class="clear"></div>

        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                        <?php
                           $news = TinMoi_BenTrai($idTL);
                           $row_news = mysql_fetch_array($news);
                        ?>
                   
                    
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_news['idTin'] ?>"> <?php echo $row_news['TieuDe'] ?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_news['urlHinh'] ?>" align="left" /><div class="des"><?php echo $row_news['TomTat'] ?> </div>
                    <div class="clear"></div> 
				</div>
            </div>  

            <div class="col2">
                <?php
                    $newsRight = TinMoi_BenPhai($idTL);
                    if($newsRight){
                        while( $row_newsRight = mysql_fetch_array($newsRight)){

                    
                 ?>
                 <p class="tlq"><a href="index.php?p=chitiettin$idTin=<?php echo $newsRight['idTin'] ?>"> <?php echo $newsRight['TieuDe'] ?> </a></p>

                 <?php
                        }
                    } else {
                        echo "Không có tin liên quan của thể loại này trong database thêm vào mới show okey";
                    }
                 ?>
                    
            </div> 
        </div>

    </div>
</div>
<div class="clear"></div>

<?php
    }
?>
<!-- box cat-->
