<?php									
	include('dbcon.php');								
	session_start();								
	switch ($_POST['form']) {							
		case 'user':			
            				
    echo $_POST['form'];					
			$sql = "SELECT * FROM users";			
			$res = mysqli_query($connection, $sql);						
			while ($row = mysqli_fetch_array($res)) {						
				echo "					
                <tr id='tr-".$row['id']."'>									
                    <td >".$row['id']."</td>									
                    <td >".$row['id_no']."</td>									
                    <td >".$row['Name']."</td>
                    <td width='14%' align='center'>														
                        <button style='' class='btn btn-success btn-xs btn-flat' onclick='editUser(".json_encode($row).", false);' title='Edit'>Edit</button>														
                        <button class='btn btn-primary btn-xs btn-flat' onclick='deleteUser(".json_encode($row).", true);' title='Delete'>Delete</button>														
                    </td>														                      
                </tr>									
                ";
			}
            
		break;

        case 'sold':
            $sql = "SELECT * FROM sold_items";						
			$res = mysqli_query($connection, $sql);						
			while ($row = mysqli_fetch_array($res)) {						
				echo "				
                <tr id='tr-".$row['id']."'>		
                    <td >".$row['id']."</td>								
                    <td >".$row['item_code']."</td>									
                    <td >".$row['seller_code']."</td>									
                    <td >".$row['date']."</td>   
                                         
                </tr>									
                ";
			}
        break;

        case 'items':
            $sql = "SELECT * FROM `items`";						
			$res = mysqli_query($connection, $sql);						
			while ($row = mysqli_fetch_array($res)) {						
				echo "				
                <tr id='tr-".$row['id']."'>		
                    <td >".$row['id']."</td>								
                    <td >".$row['item_code']."</td>									
                    <td >".$row['name']."</td>									
                    <td >".$row['price']."</td>
                    <td width='14%' align='center'>														
                        <button style='' class='btn btn-success btn-xs btn-flat' onclick='editItem(".json_encode($row).", false);' title='Edit'>Edit</button>														
                        <button class='btn btn-primary btn-xs btn-flat' onclick='deleteItem(".json_encode($row).", true);' title='Delete'>Delete</button>														
                    </td>	                     
                </tr>									
                ";
			}
        break;
	}
?>"									
									