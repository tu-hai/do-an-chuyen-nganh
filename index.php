<?php
require"lib/dbCon.php";
if ( isset ($_GET["p"]) )
    $p = $_GET["p"];
else
    $p = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Môn Mã Nguồn Mở</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/thongbao1lan.js"></script>
</head>
<body>
  
<div id="wrap-vp">
	<div id="header-vp">
    	<div id="logo"><img src="images/logo.gif" /></div>
    </div>
    
    <div id="menu-vp">
    	<!--block/menu.php-->
            <?php require "blocks/menu.php";?> <!-- Phần menu của website -->
    </div>

      <div id="midheader-vp">
    	<div id="left">
        	<ul class="list_arrow_breakumb">
            	<li class="start">
                <a href="javascript:;">Trang nhất</a>
                <span class="arrow_breakumb">&nbsp;</span></li>
           </ul>
        </div>
        <div id="right">
			<!--blocks/thongtinchung.php đăng nhập tìm kiếm-->
            <?php require "blocks/taskbar-top.php";  ?>  <!-- Phần Thông tin chung của website -->
        </div>

    </div>
                    <div class="clear" style="margin: 0"></div>
    <div id="slide-vp">
    	<!--blocks/top_trang_chu.php-->
        <?php require "blocks/top_trang_chu.php"; ?>  <!--  Phần top trang chủ của website -->

        <div id="slide-right">
            <!--blocks/quangcao_top_phai.php-->
            <?php require "blocks/quangcao_top_phai.php"; ?>
        </div>
    </div> <!-- đóng slide-vp -->

  	<div id="content-vp">
    	<div id="content-left">
    		<!--blocks/cot_trai.php-->
            <?php require "blocks/cot_trai.php"; ?>
        </div>

        <div id="content-main">
			<!--PAGES-->
            <?php
                switch ($p)
                 {
                    case "tintrongloai": require "pages/tintrongloai.php"; break;
                    case "chitiettin": require"pages/chitiettin.php"; break;
                    case "menutheloai": require"pages/menutheloai.php"; break;
                    default : require"pages/trangchu.php";
                 }
            ?> 
        </div>
        <div id="content-right">
    		<!--blocks/cot_phai.php-->
            <?php require "blocks/cot_phai.php";?>
        </div>
                 <div class="clear"></div>
    </div> <!-- đóng content-vp -->
    
    <div id="thongtin">
    	<!--blocks/thongtindoanhnghiep.php-->
        <?php  require "blocks/thongtindoanhnghiep.php";?>
    </div>  <!-- đóng thongtin -->

                <div class="clear"></div>

            	<!-- Phần FOOTTER     -->
    <div id="footer">
    	<!--blocks/footer.php-->
        <?php require "blocks/footer.php"; ?>
        <!--  -->
        <div class="ft-bot">
            <div class="bot1"><img src="images/logo.gif" /></div>
            <div class="bot2">
                     <p>© <span>Copyright 1997 VnExpress.net,</span>  All rights reserved</p>
                     <p>® VnExpress giữ bản quyền nội dung trên website này.</p>
            </div>
            <div class="bot3">
                
                     <p><a href="fb.com/hgiveup301">VnExpress tuyển dụng</a>   <a href="fb.com/hgiveup301">Liên hệ quảng cáo</a> / <a href="/contactus">Liên hệ Tòa soạn</a></p>
                     <p><a href="http://vnexpress.net/contact.htm" target="_blank" style="color: #686E7A;font: 11px arial;padding: 0 4px;text-decoration: none;">Thông tin Tòa soạn: </a><span>01695121307 - Mr Hải</span> (HN) - <span>0947551715 - Mr Hải</span> (TP HCM)</p>
                  
            </div>
        </div>
    </div> <!-- đóng footer -->       <?php
    require"blocks/loginform.php"
    ?> 
</div>
</body>
</html>