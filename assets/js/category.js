$(document).ready(function () {
   
   function onload(){
    $.ajax({
        type: "GET",
        url: "?controller=Category&function=getcategory",
        datatype: "json",
        success: function (data) {
            obj = JSON.parse(data);
            if (typeof obj === "object") {
                var len = obj.length;
                var mytable=$('#category_table').DataTable();
                mytable.clear().draw(); 
                for (var i = 0; i < len; i++) {
                    mytable.row.add($(`
                    <tr>

                    <input type=hidden value="${obj[i].ID}" class="category_id">
                    <td class="name_table">${obj[i].Category_Name} </td>



                    <td><button type="button" class="btn btn-rounded btn-primary edit_category">Edit</button>&nbsp;<button type="button" class="btn btn-rounded btn-danger delete_category">Delete</button> </td>
                </tr>
                    `)).draw();
                   
                }

            }
            
            // console.log(data);
        }
    })

   }
   onload();
   $(document).on("click","#add_category",function(){
    $.ajax({
        type: "POST",
        url: "?controller=Category&function=addcategory",
        data: $("#validate_form").serialize(),
        datatype: "json",
        success: function (data) {
            if(data==1){
              
                window.location.href="?controller=Category&function=all_category";
            }
            else{
              
                window.location.href="?controller=Category&function=all_category";
            }
        }
    })
   })
   $(document).on("click",".delete_category",function(){
    var category_id = $(this).closest('tr').find(".category_id").val();
   if(confirm("Are you really want to delete data")){
    $.ajax({
        type: "POST",
        url: "?controller=Category&function=deletecategory",
        data: {id:category_id},
        datatype: "json",
        
        success: function (data) {
            if(data==1){
        
                window.location.href="?controller=Category&function=all_category";
            }
            else{
            
                window.location.href="?controller=Category&function=all_category";
            }
        }
    })}
           
   })
   $(document).on('click', '.edit_category', function () {
    $(".category_data").hide();
    $(".update_category").css("display", "block");
    $(".page_name").text("Update Category");
    var category_name = $(this).closest('tr').find(".name_table").text().trim();
    var category_id = $(this).closest('tr').find(".category_id").val();
    $(".category_input").val(category_name);
    $(".update_id").val(category_id);
})
$(document).on("click","#update_categorybtn",function(){
    var name = $(".category_input").val();
    var id = $(".update_id").val();
   
    $.ajax({
        type: "POST",
        url: "?controller=Category&function=update_category",
        data: {name:name,id:id},
        datatype: "json",
        
        success: function (data) {
            if(data==1){
        
                window.location.href="?controller=Category&function=all_category";
            }
            else{
               
                window.location.href="?controller=Category&function=all_category";
               
            }
        }
    })
           
   })

})
