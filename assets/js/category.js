$(document).ready(function () {
    $(document).on('click', '.edit_category', function () {
        $(".category_data").hide();
        $(".update_category").css("display", "block");
        $(".page_name").text("Update Category");
    })

})
