$(document).ready(function () {
    $(document).on('click', '.edit_subcategory', function () {
        $(".subcategory_data").hide();
        $(".update_subcategory").css("display", "block");
        $(".page_name").text("Update SubCategory");
    })

})
