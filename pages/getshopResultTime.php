<?php
ob_start();
session_start();
try{

 

  require_once("../common/connectFoodie.php");
  $sql = "select s.shop_name, ROUND(AVG(h.score),1) as scorea, COUNT(h.score) as scoreb, s.open_time, s.close_time, s.address, s.shop_image, s.shop_id from shop s,tag t, shopscore h where s.permitted = '1' and s.shop_id = h.shop_id and s.shop_id = t.shop_id and t.city = :shop_place and t.area = :shop_miniplace and t.foodtype like concat('%',:shop_foodtype,'%') and t.time like concat('%',:shop_shoptime,'%') group by shop_id order by s.open_time";
  $products = $pdo->prepare($sql);

  $products -> bindValue(":shop_place",$_SESSION["SearchBox-place"]);
  $products -> bindValue(":shop_miniplace",$_SESSION["SearchBox-miniplace"]);
  $products -> bindValue(":shop_foodtype",$_SESSION["SearchBox-foodtype"]);
  $products -> bindValue(":shop_shoptime",$_SESSION["SearchBox-shoptime"]);
  $products -> execute();
  
  if( $products->rowCount() == 0 ){ //找不到
    //傳回空的JSON字串
    echo "{}";
  }else{ //找得到
    //取回一筆資料
    $prodRow = $products->fetchAll(PDO::FETCH_ASSOC);
    //送出json字串
    echo json_encode($prodRow);
  }	
}catch(PDOException $e){
  echo $e->getMessage();
}
?>