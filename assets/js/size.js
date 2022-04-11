$(document).ready(function () {
    $(document).on('click', '.add_sizebtn', function () {
        $(".size_detail").hide();
        $(".add_size").css("display", "block");
        $(".page_name").text("Add Size");
    })
    $(document).on('click', '.edit_size', function () {
        $(".size_detail").hide();
        $(".update_size").css("display", "block");
        $(".page_name").text("Update size");

        var size_id = $(this).closest('tr').find(".size_id").val();
        var size = $(this).closest('tr').find(".name_table").text().trim();

        $(".size-id").val(size_id);
        $(".size-name").val(size);
    })
    $(document).on("click", "#update_sizebtn", function () {
        var size_id = $(".size-id").val();
        var size = $(".size-name").val();

        $.ajax({
            type: "POST",
            url: "?controller=Product&function=update_size",
            data: { size_id: size_id, size: size },
            datatype: "json",

            success: function (data) {
                if (data == 1) {

                    window.location.href = "?controller=Product&function=add_size";
                }
                else {

                    window.location.href = "?controller=Product&function=add_size";

                }
            }
        })

    })
    function onload() {
        $.ajax({
            type: "GET",
            url: "?controller=Product&function=getsize",
            datatype: "json",
            success: function (data) {
                obj = JSON.parse(data);
                if (typeof obj === "object") {
                    var len = obj.length;
                    var mytable = $('#size_detail').DataTable();
                    mytable.clear().draw();
                    for (var i = 0; i < len; i++) {
                        mytable.row.add($(`
                     <tr>
                     <input type=hidden value="${obj[i].ID}" class="size_id">
               
                     <td class="name_table">${obj[i].Product_Size} </td>
                     
                     <td><button type="button" class="btn btn-rounded btn-primary edit_size">Edit</button>&nbsp;<button type="button" class="btn btn-rounded btn-danger delete_size">Delete</button> </td>
                 </tr>
                     `)).draw();

                    }

                }

            }
        })
    }
    onload();
    $(document).on("click", "#add_size", function () {
        var cname = $(".add-size").val();
        $.ajax({
            type: "POST",
            url: "?controller=Product&function=add_sizedata",
            data: { cname: cname },
            datatype: "json",
            success: function (data) {
                if (data == 1) {

                    window.location.href = "?controller=Product&function=add_size";
                }
                else {

                    window.location.href = "?controller=Product&function=add_size";
                }
            }
        })
    })
    $(document).on("click", ".delete_size", function () {
        var size_id = $(this).closest('tr').find(".size_id").val();
        if (confirm("Are you really want to delete data")) {
            $.ajax({
                type: "POST",
                url: "?controller=Product&function=delete_size",
                data: { id: size_id },
                datatype: "json",

                success: function (data) {
                    if (data == 1) {

                        window.location.href = "?controller=Product&function=add_size";
                    }
                    else {

                        window.location.href = "?controller=Product&function=add_size";
                    }
                }
            })
        }

    })

})
