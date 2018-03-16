<?php 
header("Content-Type:text/html; charset=utf-8");
include '../../common/connectFoodie.php';

$order_id = isset($_GET['order_id'])? $_GET['order_id'] : '';

if($order_id == '')
{
    return 'order_id error';
}

if (isset($order_id)) {
    $sql = "SELECT * FROM `order_info` WHERE `order_id` = '$order_id' LIMIT 0,1";
    
    $shop = $pdo->query($sql);
    $array = array();

    if ($shop->rowCount() != 0) {
        while ($prod = $shop->fetch(PDO::FETCH_ASSOC)) {
            $array[] = $prod;
        }
    }
}


?>
<!DOCTYPE html>
<html>
<head>
 <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}
    </style>

    </head>
<body>

<table>
    <tr>
        <th>標題</th>
        <th>資料</th>
    </tr>
    <?php

    $title_array = array('訂單ID'=>'order_id','取貨名稱'=>'pickup_name','取貨時間'=>'pickup_date','取貨時間'=>'pickup_time','取貨電話'=>'pickup_phone');
    foreach ($title_array as $key => $value){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$array[0][$value]."</td>";
        echo "</tr>";
    }

    ?>

</table>

</body>
</html>