$(document).ready(function () {
    $(document).on('click', '.edit_product', function () {
        $(".product_data").hide();
        $(".update_product").css("display", "block");
        $(".page_name").text("Update product");
    })
    $('input[type="file"]').change(function (e) {
        for (var i = 0; i < this.files.length; i++) {
            var extension = e.target.files[i].name.split('.').pop().toLowerCase();
            if(extension === 'png' || extension === 'jpg'|| extension === 'jpeg'){
            var reader = new FileReader();
            reader.readAsDataURL(this.files[i]);
            var fileName = e.target.files[i].name;

            $('.form-file-text').append(fileName + ' ')}

        }
    });

    $("#addProduct_validate").validate({
        rules: {
            product_name: {
                required: true,
                maxlength: 50

            },
            product_desc: {
                required: true,
                maxlength: 255

            },
            product_price: {
                required: true,
                maxlength: 10

            },
            product_quantity: {
                required: true,
                maxlength: 10


            },
            product_category: {
                required: true

            },
            product_subcategory: {
                required: true

            },
            product_color: {
                required: true

            },
            product_size: {
                required: true

            },
            files: {
                required: true,
                accept: "jpg,png,jpeg"

            }

        },
        messages: {

            files: {

                accept: "Only image type jpg/png/jpeg is allowed"
            }

        }
    });

})
