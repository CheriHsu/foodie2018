<?php

ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>





<?php


$pickup_name=$_REQUEST["pickup_name"];
$pickup_date=$_REQUEST["pickup_date"];
$pickup_time=$_REQUEST["pickup_time"];
$pickup_phone=$_REQUEST["pickup_phone"];

$pay_method=$_REQUEST["pay_method"];
$name=$_SESSION['mem']['name'];
$shop_id=$_SESSION["ShopResult-submitshopid"];
$order_id= $_SESSION['order'];
try {
	if ($_SESSION != "") {
        require_once("../common/connectFoodie.php");


		$sql="INSERT INTO `order_info` (`order_id`,`pickup_name`,pickup_date,pickup_time,pickup_phone,pay_method,order_date,pickup_addr,is_delete,member_id,shop_id)
 VALUES (?,?,?,?,?,?,?,?,?,?,?)";
		$member=$pdo->prepare($sql);
		$member->bindValue(1,$order_id);
		$member->bindValue(2,$pickup_name);
		$member->bindValue(3,$pickup_date);
		$member->bindValue(4,$pickup_time);
		$member->bindValue(5,$pickup_phone);
		$member->bindValue(6,$pay_method);
		$member->bindValue(7,date("Y-m-d H:i:s"));
		$member->bindValue(8,'紫蘇梅飯糰');
		$member->bindValue(9,'0');
		$member->bindValue(10,$name);
        $member->bindValue(11,$shop_id);

		$member->execute();
        $_SESSION['order']="";
		// echo "訂單編號：".$order_id.'<br><br>訂單已存在會員系統，五秒後返回首頁。';
		// echo "<script>setTimeout(function(){window.location.href='../index.php'},5000);</script>";
		    // echo  "<script>
      //   alert('請登入');
      //   window.location.href='memLogin.php'
      // </script>";

       echo  "<script>
        alert('訂單編號：".$order_id."訂單已存在會員系統');
        window.location.href='memArea.php'
      </script>";
        return;
        return;
	}else{
		echo "有誤!";
	}
	
} catch (PDOException $e) {
	echo "錯誤訊息: ",$e->getMessage(),"<br>";
	echo "錯誤行數: ",$e->getLine(),"<br>";
}
?>
</body>
</html>