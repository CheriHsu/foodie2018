<?php
ob_start();
session_start();
//啟用session
// include '../common/common.php';
include 'connectFoodie.php';
try{

    $sql = "select * from member where member_id = :member_id and password = :password AND role ='admin'";
    $member = $pdo->prepare($sql);
    $member -> bindValue(":member_id",$_REQUEST["member_id"]);
    $member -> bindValue(":password",$_REQUEST["password"]);
    $member -> execute();

    if( $member->rowCount() !=0 ){
        $memRow = $member->fetch(PDO::FETCH_ASSOC);

        //登入成功，將登入者資訊寫入session
        $_SESSION["member_id"] = $memRow["member_id"];
        $_SESSION["name"] = $memRow["name"] ;
        $_SESSION["password"] = $memRow["password"];
        $_SESSION["right"] ="admin";

        header("Location:../pages/admin/admin.php");
        die();
    }else{
        echo "帳密有誤";
    }
}catch(PDOException $ex){
    echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
    echo "行號：",$ex->getLine(),"<br>";
}
?>