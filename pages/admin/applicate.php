<?php include 'header.php'; ?>
<?php
// header("Content-Type:text/html; charset=utf-8");
include '../../common/connectFoodie.php';


//action to permit or cancel

if (isset($_POST['passed'])) {
    $sql = "UPDATE `mem_message` SET `is_delete` = '1' WHERE `message_id` = '".$_POST['message_id']."'";
    $pdo->prepare($sql)->execute();
}

if (isset($_POST['cancel'])) {
    $sql = "UPDATE `mem_message` SET `is_delete` = '0' WHERE `message_id` = '".$_POST['message_id']."'";
    $pdo->prepare($sql)->execute();
}
$sql = "select * from mem_message";
$report = $pdo->query($sql);
$array = array();


if ($report->rowCount() != 0) {
    while ($prod = $report->fetch(PDO::FETCH_ASSOC)) {
        $array[] = $prod;
    }
}
?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">檢舉審核</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>店家Id</th>
                                <th>會員</th>
                                <th>訊息</th>
                                <th>審核狀態</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <form action="" method="post">
                                <?php
                                foreach ($array as $key => $value) {


                                    echo "<tr>";
                                    echo "<td>" . $key . "</td>";
                                    echo "<td>". $array[$key]["message_id"] ."</td>";
                                    echo "<td>" . $array[$key]["member_id"] . "</td>";
                                    echo "<td>" . $array[$key]["shop_message"] . "</td>";
                                    if ($array[$key]['is_delete'] == '1') {
                                        echo "<td>刪除</td>";
                                    } else {
                                        echo "<td>未審核</td>";
                                    }

                                    if ($array[$key]['is_delete'] == '0') {
                                        echo "<td>
                                    <button type='button' onclick='send(\"".$array[$key]["message_id"]."\",\"passed\")' class='btn btn-primary' >待審</button>
                                    </td>";
                                    } else {
                                        echo "<td>
                                    <button type='button' onclick='send(\"".$array[$key]["message_id"]."\",\"cancel\")' class='btn btn-danger'>刪除</button>
                                    </td>";
                                    }
                                }
                                echo "</tr>";
                                ?>
                            </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
            function send(message_id, status) {
        var url = 'applicate.php';
        var form = $('' +
            '<form action="' + url + '" method="post" style="display:none;">' +
            '<input type="text" name="message_id" value="' + message_id + '" />' +
            '<input type="hidden" name="'+status+'" />' +
            '<input type="hidden" name="'+status+'" />' +
            '</form>');
        $('body').append(form);
        form.submit();

    }
    </script>

<?php include 'footer.php'; ?>