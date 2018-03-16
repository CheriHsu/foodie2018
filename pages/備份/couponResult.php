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
  $sql = "select s.shop_name, ROUND(AVG(h.score),1) as scorea, COUNT(h.score) as scoreb, s.open_time, s.close_time, s.address, s.shop_image, s.shop_id from shop s,tag t, shopscore h where s.permitted = '1' and s.shop_id = h.shop_id and s.shop_id = t.shop_id and s.coupon = 1 group by shop_id order by scorea DESC";
  $products = $pdo->prepare($sql);
  $products -> execute();

?>

<div class="ShopResult">
	<div class="ShopResult-container">

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
