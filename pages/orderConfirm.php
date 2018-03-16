<?php
error_reporting(1);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

session_start();
ob_start();
session_start();
include '../common/connectFoodie.php';
include '../views/header.php';
include '../common/Navbar.php';
include '../common/Searchbox.php';

?>

<div class="col-xs-12">
    <div class="orderwrapper">
        <div class="orderinfo">
            <div class="form-style-2">


                <form id="myForm" method="post" action="orderInsert.php">
                    <table border="1" align="center">
                        <img src="../assets/images/orderfood.png">

                        <caption>取貨資料</caption>
                        <tr>
                            <th>取貨人名稱</th>
                            <td><input id="pickup_name" placeholder="取貨人名稱" type="text" name="pickup_name"></td>
                        </tr>
                        <tr>
                            <th>取貨日期</th>
                            <td><input id="pickup_date" placeholder="取貨日期" type="date" name="pickup_date"></td>
                        </tr>
                        <tr>
                            <th>取貨時間</th>
                            <td><input id="pick_time" placeholder="取貨時間" type="time" name="pickup_time"></td>
                        </tr>
                        <tr>
                            <th>電話號碼</th>
                            <td><input id="pickup_phone" placeholder="電話號碼" type="text" name="pickup_phone"></td>
                        </tr>
                        <tr>
                            <th>付款方式</th>
                            <td>
                                ATM <input type="radio" class="ordercheck" name="pay_method" value="ATM">
                                cash <input type="radio" class="ordercheck" name="pay_method" value="cash">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" id="sub">
                                <input type="submit" name="submit">
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>

    </div>

    <div class="clearfix"></div>
</div>
    <script>
        function $id(id){
            return document.getElementById(id);
        }
        function check(e) {
            var pickup_name = $id("pickup_name").value;
            if (pickup_name.length < 3) {
                alert('名稱請輸入');
                $id("pickup_name").focus();
                e.preventDefault();
                return;
            }
            var pickup_date = $id("pickup_date").value;
            if (pickup_date == "") {
                alert('請輸入取件日期');
                $id("memPsw").focus();
                e.preventDefault();
                return;
            }
            var pick_time = $id("pick_time").value;
            if (pick_time == "") {
                alert('請輸入取件日期');
                $id("pick_time").focus();
                e.preventDefault();
                return;
            }
            var pickup_phone = $id("pickup_phone").value;

            if (pickup_phone.length < 10) {

                alert("電話有誤");
                $id("pickup_phone").focus();
                e.preventDefault();
                return;
            }

            var pay_method = document.getElementsByName("pay_method");
            if(pay_method[0].checked == false && pay_method[1].checked == false){
                alert("請填付款方式");
                e.preventDefault();
                return;
            }
        }
            window.onload = function init(){
                document.getElementById("myForm").addEventListener("submit",check,false);
            }

    </script>
