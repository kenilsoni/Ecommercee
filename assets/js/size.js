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
    })


})
