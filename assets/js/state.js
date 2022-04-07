$(document).ready(function () {
    $(document).on('click', '.add_statebtn', function () {
        $(".state_data").hide();
        $(".add_state").css("display", "block");
        $(".page_name").text("Add State");
    })
    $(document).on('click', '.edit_state', function () {
        $(".state_data").hide();
        $(".update_state").css("display", "block");
        $(".page_name").text("Update State");
    })

})
