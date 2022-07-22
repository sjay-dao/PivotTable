
<?php
include('../dbcon.php');

    if($_POST['purpose'] == 'arrayItem'){
        $sql = "Select * from `items` order by `name`";
        // echo $sql;
        $res = mysqli_query($connection, $sql);
        $cnt=0;
        while($row = mysqli_fetch_array($res)){
            $data[$cnt] = $row['name'];
            $cnt++;
        }	
        echo json_encode( $data);
    }else  if($_POST['purpose'] == 'arrayUsers'){
        $sql = "Select * from `users` order by `Name`";
        // echo $sql;
        $res = mysqli_query($connection, $sql);
        $cnt=0;
        while($row = mysqli_fetch_array($res)){
            $data[$cnt] = $row['Name'];
            $cnt++;
        }	
        echo json_encode( $data);
    }else{
        $sql = "SELECT users.id_no as `ID`, users.Name as 'Sales Person', 
        items.name as Items, sum(items.price) Total 
        FROM `sold_items` 
        inner join `items` on `items`.`item_code` = sold_items.item_code 
        inner join users on users.id_no = sold_items.seller_code 
        group by users.id_no, users.Name, items.name 
        order by users.id_no";
        $result = mysqli_query($connection, $sql) or $arrckcp = 0;	
        $cnt=0;
        while($row = mysqli_fetch_array($result)){
            $data[$cnt][0] = $row['ID'];
            $data[$cnt][1] = $row['Sales Person'];
            $data[$cnt][2] = $row['Items'];
            $data[$cnt][3] = $row['Total'];
            $cnt++;
        }	
        echo json_encode( $data);
    }


?>