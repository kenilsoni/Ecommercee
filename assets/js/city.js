$(document).ready(function () {
    $(document).on('click', '.add_citybtn', function () {
        $(".city_data").hide();
        $(".add_city").css("display", "block");
        $(".page_name").text("Add City");
    })
    $(document).on('click', '.edit_city', function () {
        $(".city_data").hide();
        $(".update_city").css("display", "block");
        $(".page_name").text("Update City");
    })
   

})
