
<?php
include('../dbcon.php');


    if($_POST['purpose'] == 'update'){
        $sql = "UPDATE `users` SET `id_no` = '".$_POST['id_no']."', `Name` = '".$_POST['Name']."' WHERE `id` ='".$_POST['id']."'";
        echo $sql;
        $res = mysqli_query($connection, $sql);	
    }else if($_POST['purpose'] = 'delete'){
        $sql = "Delete from `users` WHERE `id` = '".$_POST['id']."'";
        echo $sql;
        $res = mysqli_query($connection, $sql);	
    }else{
        $sql = "INSERT INTO `users` SET   `Name` = '".$_POST['Name']."', `id_no` = '".
        $_POST['id_no']."'";
        $result = mysqli_query($connection, $sql) or $arrckcp = 0;	

    }


?>