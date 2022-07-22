<?php
include("cruddb.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Keypad</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <!-- CSS bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script src='main.js'></script>
</head>
<body>
    <button type="button" name="user" class="button_tbl ">User</button>
    <button type="button" name="items" class="button_tbl ">Items</button>
    <button type="button" name="sold" class="button_tbl ">Sold Items</button>
    
    <button type="button" onclick=" $('#mUser').show(); $('#btn_save_user').hide(); $('#btn_create_user').show();"> Add users</button>
    <button type="button" onclick="$('#mItem').show(); $('#btn_save_item').hide(); $('#btn_create_item').show();"> Add Items</button>
    <button type="button" onclick="$('#mSold').show(); fillSelectItemCode(); fillSelectSellerCode();"> Buy Item</button>
    <button type="button" onclick="displayPivotTblData()">View Pivoted Table</button>
    
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>

            </th>
        </thead>
        <tbody id="tbl_body">
           
        </tbody>
       
    </table>

    

</body>

  <div id="mUser" style="display:none; position:fixed; left:0; top:0; background:#0007; height:100%; width:100%; margin:auto">
        <div id="modal" class="form-control" style="margin:auto; width:600px;  margin-top:100px; background:white;">
            <div class="row m-5">       
                <label class= "col-md-5" for="">Name</label>
                <input type="text" class="col-md-7" id="Uname">
            </div>
            <div class="row m-5">       
                <label class= "col-md-5" for="">ID No.</label>
                <input type="text" class="col-md-7" id="idno">
            </div>
            <input tpe="text" id="uid" hidden>
            <div class="row m-5">       
                <button type="button" class=' offset-md-4 col-md-4 btn btn-success btn-xs btn-flat' id="btn_save_user" style="display:none">Save</button>
                <button type="button" class=' offset-md-4 col-md-4 btn btn-success btn-xs btn-flat' id="btn_create_user" style="display:none">Create</button>
                <button type="button"class="col-md-4 btn btn-warning" onclick="$('#mUser').hide()">Exit</button>
            </div>
        </div>  
  </div>

  <div id="mItem" style="display:none; position:fixed; left:0; top:0; background:#0007; height:100%; width:100%; margin:auto">
        <div id="modal" class="form-control" style="margin:auto; width:600px;  margin-top:100px; background:white;">
            <div class="row m-5">       
                <label class= "col-md-5" for="">Item Code</label>
                <input type="text" class="col-md-7" id="item_code">
            </div>
            <div class="row m-5">       
                <label class= "col-md-5" for="">Name</label>
                <input type="text" class="col-md-7" id="Iname">
            </div>
            <div class="row m-5">       
                <label class= "col-md-5" for="">Price</label>
                <input type="text" class="col-md-7" id="price">
            </div>
            <input tpe="text" id="iid" >
            <div class="row m-5">       
                <button type="button" class=' offset-md-4 col-md-4 btn btn-success btn-xs btn-flat' id="btn_save_item" style="display:none">Save</button>
                <button type="button" class=' offset-md-4 col-md-4 btn btn-success btn-xs btn-flat' id="btn_create_item" style="display:none">Create</button>
                <button type="button"class="col-md-4 btn btn-warning" onclick="$('#mItem').hide()">Exit</button>
            </div>
        </div>  
  </div>

  <div id="mSold" style="display:none; position:fixed; left:0; top:0; background:#0007; height:100%; width:100%; margin:auto">
        <div id="modal" class="form-control" style="margin:auto; width:600px;  margin-top:100px; background:white;">
            <div class="row m-5">       
                <label class= "col-md-5" for="">Item</label>
                <select id="Sitem_code">
                    <option>Sample</option>
                </select>
            </div>
            <div class="row m-5">       
                <label class= "col-md-5" for="">Seller</label>
                <select id="Sseller_code">
                    <option>Sample</option>
                </select>
            </div>
           
            <div class="row m-5">       
                <!-- <button type="button" class=' offset-md-4 col-md-4 btn btn-success btn-xs btn-flat' id="btn_save_item" style="display:none">Save</button> -->
                <button type="button" class=' offset-md-4 col-md-4 btn btn-success btn-xs btn-flat' id="btn_create_sold" style="display:">Create</button>
                <button type="button"class="col-md-4 btn btn-warning" onclick="$('#mSold').hide()">Exit</button>
            </div>
        </div>  
  </div>


</html>