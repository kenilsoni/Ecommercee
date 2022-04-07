$(document).ready(function () {
    $(document).on('click', '.add_countrybtn', function () {
        $(".country_data").hide();
        $(".add_country").css("display", "block");
        $(".page_name").text("Add Country");
    })
    $(document).on('click', '.edit_country', function () {
        $(".country_data").hide();
        $(".update_country").css("display", "block");
        $(".page_name").text("Update Country");
    })

})
