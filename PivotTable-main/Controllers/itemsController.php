
<?php
include('../dbcon.php');


    if($_POST['purpose'] == 'update'){
        $sql = "UPDATE `items` SET `item_code` = '".$_POST['item_code'].
        "', `name` = '".$_POST['name']."', `price` = '".$_POST['price'].
        "' WHERE `id` ='".$_POST['id']."'";
        echo $sql;
        $res = mysqli_query($connection, $sql);	
    }else if($_POST['purpose'] == 'delete'){
        $sql = "Delete from `items` WHERE `id` = '".$_POST['id']."'";
        echo $sql;
        $res = mysqli_query($connection, $sql);	
    }else{
        $sql = "INSERT INTO `items` SET   `name` = '".$_POST['name'].
        "', `item_code` = '".$_POST['item_code'].
        "', price = '".$_POST['price']."'";
        echo $sql;
        $result = mysqli_query($connection, $sql) or $arrckcp = 0;	

    }


?>