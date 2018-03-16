<?php
ob_start();
session_start();
include '../views/header.php';
include '../common/Navbar.php';
include '../common/Searchbox.php';
?>
<?php
try {
  // 連到這個資料夾
  require_once("../common/connectFoodie.php");
  $sql = "select s.shop_name, ROUND(AVG(h.score),1) as scorea, COUNT(h.score) as scoreb, s.open_time, s.close_time, s.address, s.shop_image, s.shop_id from shop s,tag t, shopscore h where s.permitted = '1' and s.shop_id = h.shop_id and s.shop_id = t.shop_id and s.shop_name like concat('%',:shop_name,'%') group by shop_id";
  $products = $pdo->prepare($sql);

  $products -> bindValue(":shop_name",$_REQUEST["Navbar-searchname"]);
  $products -> execute();

  $_SESSION["Navbar-searchname"] = $_REQUEST["Navbar-searchname"];
  // $prod = $products->fetch(PDO::FETCH_ASSOC);
  // $_SESSION["ShopResult-submitshopid"] = $prod["shop_id"];

?>

<div class="ShopResult">
	<div class="ShopResult-container">
		<div class="ShopResult-orderby col-sm-12">
			<span class="resultTitle">搜尋結果</span>
			<!-- 排序 -->
			<div class="ShopResult-orderby-icon">
				<div class="ShopResult-orderby-txt">排列順序:</div>
				<a class="filter o1">
					<img src="../assets/images/shopresult/ShopResult-orderby1.png" alt="icon1" onclick="searchgetShopListCoupon()"/>
					<span>優惠卷</span>
				</a>
				<a class="filter o2">
					<img src="../assets/images/shopresult/ShopResult-orderby2.png" alt="icon2" onclick="searchgetShopList()"/>
					<span>評價</span>
				</a>

				<a class="filter o3">
					<img src="../assets/images/shopresult/ShopResult-orderby3.png" alt="icon3" onclick="searchgetShopListTime()"/>
					<span>上架日期</span>
				</a>
				<a class="filter o4">
					<img src="../assets/images/shopresult/ShopResult-orderby4.png" alt="icon4" onclick="searchgetShopListKeep()"/>
					<span>收藏人數</span>
				</a>
			</div>
		</div>
		<!-- <div class="clearfix"></div> -->

		<div id="shopListGroup">
<?
		if( $products->rowCount() !=0 ){
  		

		while($prod = $products->fetch(PDO::FETCH_ASSOC)){
?>
	
	<div class="ShopResult-cardAll" id="showShopListPlace" name="showShopListPlaces">
		<label for="<?php echo $prod["shop_id"]; ?>">
		<a="#" class="ShopResult-card col-sm-3 col-xs-6">
			<div class="ShopResult-box">
			<form class="ShopResult-Shoplist" name="ShopResult-Shoplist" method="get" action="ShopResultItemSession.php">
				<div class="col-sm-12 col-md-12 ShopResult-head"></div>
				<!-- <img src="../assets/images/shopresult/ShopResult_cara.jpg" > -->
				<img alt="card" src="../assets/images/sripic/<?php echo $prod["shop_image"];?>">
				<div class="ShopResult-title"><?php echo $prod["shop_name"]; ?></div>
				<div class="ShopResult-score">總評價：<?php echo $prod["scorea"]; ?>分 / 共<?php echo $prod["scoreb"]; ?>人評</div>
				<div class="ShopResult-time">營業時間：<?php echo $prod["open_time"]; ?>~<?php echo $prod["close_time"]; ?></div>
				<div class="ShopResult-add">地點：<?php echo $prod["address"]; ?></div>
				<input type="submit" id="<?php echo $prod["shop_id"]; ?>" name="ShopResult-submit" class="ShopResult-submit">
				<input type="hidden" name="ShopResult-submitshopid" value="<?php echo $prod["shop_id"]; ?>">
			</form>	
			</div>
		</a>
		</label>
	</div>
		
	
<?php 
  }//while
		


  }else{
  	echo "查無此攤商，請重新輸入";
  }
?>

	</div>
</div>
</div>
<div class="clearfix"></div>


<?php 


} catch (PDOException $ex) {
  echo "錯誤原因 : " , $ex->getMessage(), "<br>";
  echo "錯誤行號 : " , $ex->getLine(), "<br>";	
}
?> 

<?php 
  include '../views/footer.php';
?>
