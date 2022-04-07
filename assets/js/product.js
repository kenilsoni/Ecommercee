$(document).ready(function () {
    $(document).on('click', '.edit_product', function () {
        $(".product_data").hide();
        $(".update_product").css("display", "block");
        $(".page_name").text("Update product");
    })

})
