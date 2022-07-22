
<?php
include('../dbcon.php');

    if($_POST['purpose'] == 'fillItem'){
        $sql = "Select * from `items`";
        // echo $sql;
        $res = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_array($res)){
            echo "<option value='".$row['item_code']."'>".$row['name']."</option>";
        }	
    }else  if($_POST['purpose'] == 'fillSeller'){
        $sql = "Select * from `users`";
        // echo $sql;
        $res = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_array($res)){
            echo "<option value='".$row['id_no']."'>".$row['Name']."</option>";
        }	
    }else{
        $sql = "INSERT INTO `sold_items` SET   `item_code` = '".$_POST['item_code'].
        "', `seller_code` = '". $_POST['seller_code'] . 
        "', `date` = '" . date('Y-m-d H:i:s') . "'";
        echo $sql;
        $result = mysqli_query($connection, $sql) or $arrckcp = 0;	

    }


?>