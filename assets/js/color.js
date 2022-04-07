$(document).ready(function () {
    $(document).on('click', '.add_colorbtn', function () {
        $(".color_detail").hide();
        $(".add_color").css("display", "block");
        $(".page_name").text("Add Color");
    })
    $(document).on('click', '.edit_color', function () {
        $(".color_detail").hide();
        $(".update_color").css("display", "block");
        $(".page_name").text("Update Color");
    })


})
