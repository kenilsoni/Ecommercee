$(document).ready(function () {

    function onload() {
        $.ajax({
            type: "GET",
            url: "?controller=SubCategory&function=getsubcategory",
            datatype: "json",
            success: function (data) {
                obj = JSON.parse(data);
                console.log(obj);
                if (typeof obj === "object") {
                    var len = obj.length;
                    var mytable = $('#subcategory_table').DataTable();
                    mytable.clear().draw();
                    for (var i = 0; i < len; i++) {
                        mytable.row.add($(`
                     <tr>
                     <input type=hidden value="${obj[i].ID}" class="subcategory_id">
                     <input type=hidden value="${obj[i].Category_ID}" class="category_id">
                     <td >${obj[i].Category_Name} </td>
                     <td class="name_table">${obj[i].Subcategory_Name} </td>
                     <td><button type="button" class="btn btn-rounded btn-primary edit_subcategory">Edit</button>&nbsp;<button type="button" class="btn btn-rounded btn-danger delete_subcategory">Delete</button> </td>
                 </tr>
                     `)).draw();

                    }

                }

            }
        })

    }
    function getcategory(){
        $.ajax({
            type: "GET",
            url: "?controller=Category&function=getcategory",
            datatype: "json",
            success: function (data) {
                obj = JSON.parse(data);
                if (typeof obj === "object") {
                    var len = obj.length;
                    // $("#Category").append('');
                    for (var i = 0; i < len; i++) {
                        
                    $("#Category").append(`
                 
                    <option value="${obj[i].ID}">${obj[i].Category_Name}</option>

                    `);
                     

                    }

                }

            }
        })
    }
    onload();
    getcategory()
    $(document).on("click", "#add_subcategory", function () {
        $.ajax({
            type: "POST",
            url: "?controller=SubCategory&function=addsubcategory",
            data: $("#validate_form").serialize(),
            datatype: "json",
            success: function (data) {
                if (data == 1) {

                    window.location.href = "?controller=SubCategory&function=all_subcategory";
                }
                else {

                    window.location.href = "?controller=SubCategory&function=all_subcategory";
                }
            }
        })
    })
    $(document).on("click", ".delete_subcategory", function () {
        var subcategory_id = $(this).closest('tr').find(".subcategory_id").val();
        if (confirm("Are you really want to delete data")) {
            $.ajax({
                type: "POST",
                url: "?controller=SubCategory&function=deletesubcategory",
                data: { id: subcategory_id },
                datatype: "json",

                success: function (data) {
                    if (data == 1) {

                        window.location.href = "?controller=SubCategory&function=all_subcategory";
                    }
                    else {

                        window.location.href = "?controller=SubCategory&function=all_subcategory";
                    }
                }
            })
        }

    })
    $(document).on('click', '.edit_subcategory', function () {
        $(".subcategory_data").hide();
        $(".update_subcategory").css("display", "block");
        $(".page_name").text("Update SubCategory");
        var subcategory_name = $(this).closest('tr').find(".name_table").text().trim();
        var category_id = $(this).closest('tr').find(".category_id").val();
        var subcategory_id = $(this).closest('tr').find(".subcategory_id").val();
        // console.log(subcategory_name+subcategory_id);
        $(".subcategory_input").val(subcategory_name);
        $(".update_id").val(subcategory_id);
        $("#Category").val(category_id);
    })
    $(document).on("click", "#update_subcategorybtn", function () {
       var id=$(".update_id").val();
        var catid=$("#Category option:selected").val();
        var subcat=$(".subcategory_input").val();
        $.ajax({
            type: "POST",
            url: "?controller=SubCategory&function=update_subcategory",
            data: {update_id:id,Category:catid,subcategory_input:subcat},
            datatype: "json",

            success: function (data) {
                if (data == 1) {

                    window.location.href = "?controller=SubCategory&function=all_subcategory";
                }
                else {

                    window.location.href = "?controller=SubCategory&function=all_subcategory";

                }
            }
        })

    })

})
