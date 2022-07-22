
    var arr_item;
    var arr_user;
    var pivot_data;


$(document).ready(function(){
    // fillSelectItemCode();
    // fillSelectSellerCode();
    
    getArrayUser();
    getArrayItem();

    let tables_fields = {
        'user':[ "Id", "ID No.","Name", "Options"],
        'items':['Id','Item Code', 'Name', 'Price', "Options"],
        'sold': ["Id", 'Item Code', 'Seller Code', 'Date']
    }

   $(".button_tbl").click(function(){
        // alert(tables_fields[$(this).prop('name')].length);
        $("thead").html('');
        tables_fields[$(this).prop('name')].forEach(arrfunction);
       
        $.ajax({	
            type: 'POST',
            url: 'cruddb.php',
            data: 'form='+$(this).prop('name'),
            success: function(data) {
                // console.log(data);
                $("#tbl_body").html(data);
            }
        });

        function arrfunction(array_element, index) {
            $("thead").append("<th>"+ array_element+"</th>"); 
        }
   });

   $("#btn_save_user").click(function(){
    let Name =  $('#Uname').val();
    let id_no = $('#idno').val();
    let id = $('#uid').val();
    $.ajax({	
        type: 'POST',
        url: 'Controllers/userController.php',
        data: 'Name='+Name+"&id_no="+id_no+"&purpose=update&id="+id,
        success: function(data) {
            console.log(data);
            $('#mUser').hide();
            $(".button_tbl").eq(0).trigger('click');
        },
        error: function(ts) { alert(ts.responseText) }
    });
   })
   

   $("#btn_create_user").click(function(){
    let Name =  $('#Uname').val();
    let id_no = $('#idno').val();
    $.ajax({	
        type: 'POST',
        url: 'Controllers/userController.php',
        data: 'Name='+Name+"&id_no="+id_no+"&purpose=create",
        success: function(data) {
            console.log(data);
            $('#mUser').hide();
            $(".button_tbl").eq(0).trigger('click');
        },
        error: function(ts) { alert(ts.responseText) }
    });
   })

   $("#btn_save_item").click(function(){
    
    let name =  $('#Iname').val();
    let item_code = $('#item_code').val();
    let price = $('#price').val();
    let id = $('#iid').val();
    $.ajax({	
        type: 'POST',
        url: 'Controllers/itemsController.php',
        data: 'name='+name+"&item_code="+item_code+"&price="+price+"&purpose=update&id="+id,
        success: function(data) {
            console.log(data);
            $('#mItem').hide();
            $(".button_tbl").eq(1).trigger('click');
        },
        error: function(ts) { alert(ts.responseText) }
    });
   })
   

   $("#btn_create_item").click(function(){
    let name =  $('#Iname').val();
    let item_code = $('#item_code').val();
    let price = $('#price').val();
    $.ajax({	
        type: 'POST',
        url: 'Controllers/itemsController.php',
        data: 'name='+name+"&item_code="+item_code+"&price="+price+"&purpose=create",
        success: function(data) {
            console.log(data);
            $('#mItem').hide();
            $(".button_tbl").eq(1).trigger('click');
        },
        error: function(ts) { alert(ts.responseText) }
    });
   })

   $("#btn_create_sold").click(function(){
    let seller_code =  $('#Sseller_code').val();
    let item_code = $('#Sitem_code').val();
    let d = new Date();
    $.ajax({	
        type: 'POST',
        url: 'Controllers/SoldController.php',
        data: 'seller_code='+seller_code+"&item_code="+item_code+
                "&purpose=create",
        success: function(data) {
            console.log(data);
            $('#mSold').hide();
            $(".button_tbl").eq(2).trigger('click');
        },
        error: function(ts) { alert(ts.responseText) }
    });
   })
})

function editUser(obj){
    $('#mUser').show();
    $('#btn_save_user').show();
    $('#btn_create_user').hide();
    $('#Uname').val(obj.Name);
    $('#idno').val(obj.id_no);
    $('#uid').val(obj.id);
    
}


function deleteUser(obj){
    let id = obj.id
    $.ajax({	
        type: 'POST',
        url: 'Controllers/userController.php',
        data: '&purpose=delete&id='+id,
        success: function(data) {
            console.log(data);
            $('#mUser').hide();
            $(".button_tbl").eq(0).trigger('click');
        },
        error: function(ts) { alert(ts.responseText) }
    });
}


function editItem(obj){
    $('#mItem').show();
    $('#btn_save_item').show();
    $('#btn_create_item').hide();
    $('#item_code').val(obj.item_code);
    $('#Iname').val(obj.name);
    $('#price').val(obj.price);
    $('#iid').val(obj.id);

}


function deleteItem(obj){
    let id = obj.id
    $.ajax({	
        type: 'POST',
        url: 'Controllers/itemsController.php',
        data: '&purpose=delete&id='+id,
        success: function(data) {
            console.log(data);
            $('#mItem').hide();
            $(".button_tbl").eq(1).trigger('click');
        },
        error: function(ts) { alert(ts.responseText) }
    });
}

function fillSelectItemCode(){
    $.ajax({	
        type: 'POST',
        url: 'Controllers/soldController.php',
        data: '&purpose=fillItem',
        success: function(data) {
            console.log(data);
            $('#Sitem_code').html(data);
        },
        error: function(ts) { alert(ts.responseText) }
    });
}

function fillSelectSellerCode(){
    $.ajax({	
        type: 'POST',
        url: 'Controllers/soldController.php',
        data: '&purpose=fillSeller',
        success: function(data) {
            console.log(data);
            $('#Sseller_code').html(data);
        },
        error: function(ts) { alert(ts.responseText) }
    });
}

function getArrayItem(){
    $.ajax({	
        type: 'POST',
        url: 'Controllers/pivotTblController.php',
        data: '&purpose=arrayItem',
        success: function(data) {
            
            console.log(data);
          arr_item = JSON.parse(data);
        },
        error: function(ts) { alert(ts.responseText) }
    });
}

function getArrayUser(){
    $.ajax({	
        type: 'POST',
        url: 'Controllers/pivotTblController.php',
        data: '&purpose=arrayUsers',
        success: function(data) {
            // console.log(data);
           arr_user = JSON.parse(data);
        },
        error: function(ts) { alert(ts.responseText) }
    });
}

function displayPivotTblData(){
    $.ajax({	
        type: 'POST',
        url: 'Controllers/pivotTblController.php',
        data: '&purpose=pivotData',
        success: function(data) {
           pivot_data = JSON.parse(data);
           
           $("#tbl_body").html("");
            // do{
            //     scnt=0;
            //     $("#tbl_body").append("<tr><td>"+pivot_data[scnt][1]+"</td>");
            //     let current_seller= pivot_data[scnt][1];
            //     for(y=0; y<arr_item.length; y++){
            //         if(current_seller != pivot_data[scnt][1]){ // if new user/seller then create new row
            //             $("#tbl_body").append("</tr>")
            //             y= -1;
            //             scnt++;
            //             break;
            //         }
            //         if(pivot_data[scnt][2] != arr_item[y])// if the data inside pivot has no item within the seller then it just hop
            //             continue;
            //         else{
            //             $("#tbl_body").append("<td>"+pivot_data[scnt][3]+"</td>");
            //         }
            //         console.log
            //     }
            // }while(scnt < arr_user.length || scnt <= 0 );

           console.log(pivot_data);
           console.log(arr_user);
           console.log(arr_item);
        },
        error: function(ts) { alert(ts.responseText) }
    });
}

