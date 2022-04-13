$(document).ready(function () {


    // $(function () {
    //     // Multiple images preview with JavaScript
    //     var multiImgPreview = function (input, imgPreviewPlaceholder) {
    //         if (input.files) {
    //             var filesAmount = input.files.length;
    //             for (i = 0; i < filesAmount; i++) {
    //                 var extension = input.files[i].name.split('.').pop().toLowerCase();
    //                 if (extension === 'jpg' || extension === 'png' || extension === 'jpeg') {
    //                     var reader = new FileReader();
    //                     reader.onload = function (event) {
    //                         $($.parseHTML('<img>')).attr('src', event.target.result).attr('class', 'image').appendTo(imgPreviewPlaceholder);
    //                         // $(imgPreviewPlaceholder).append(`<button type="button"  class="btn btn-danger delete_image" >Delete</button>`);
    //                     }
    //                     reader.readAsDataURL(input.files[i]);
    //                 }
    //             }
    //         }
    //     };
    //     $('#files_image').on('change', function () {
    //         multiImgPreview(this, 'div.imgGallery');
    //     });
    // });
    //   $(document).on('click','.delete_image',function(){
    //       var id=$(this).remove();
    //       console.log(id);
    //   })
    if (window.File && window.FileList && window.FileReader) {
    $("#files_image").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $(".imgGallery").append("<span class=\"pip\">" +
          "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
          "<br/><span class=\"remove\">Remove image</span>" +
          "</span>");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }

    function onload() {
        $.ajax({
            type: "GET",
            url: "?controller=Product&function=getproduct",
            datatype: "json",
            success: function (data) {
                obj = JSON.parse(data);
                console.log(obj);
                if (typeof obj === "object") {
                    var len = obj.length;
                    var mytable = $('#product_table').DataTable();
                    mytable.clear().draw();
                    for (var i = 0; i < len; i++) {
                        var number=i+1;
                        mytable.row.add($(`
                        <tr>
                        <input type="hidden" value="${obj[i][0].ID}" class="product_id">
                        <td>${number}</td>
                        <td>${obj[i][0].Product_Name}</td>
                        <td>
                            <div class="m-r-10"><img src="./assets/uploads/${obj[i][1].Image_Path}" alt="user" class="rounded" width="45"></div>
                        </td>
                        <td>${obj[i][0].Product_Quantity} </td>
                        <td>${obj[i][0].Product_Price} </td>
                        <td>${obj[i][0].Created_At} </td>
                        <td>${obj[i][0].Modified_At} </td>
                       


                        <td><button type="button" class="btn btn-rounded btn-primary edit_product">Edit</button>&nbsp;<button type="button" class="btn btn-rounded btn-danger delete_product">Delete</button> </td>
                    </tr>
                     `)).draw();

                    }

                }

            }
        })
    }
    function getcategory() {
        $.ajax({
            type: "GET",
            url: "?controller=Category&function=getcategory",
            datatype: "json",
            success: function (data) {
                obj = JSON.parse(data);
                if (typeof obj === "object") {
                    var len = obj.length;
                    // $("#Category").append('');
                    for (var i = 0; i < len; i++) {

                        $("#Category").append(`
                 
                    <option value="${obj[i].ID}">${obj[i].Category_Name}</option>

                    `);


                    }

                }

            }
        })
    }

    function getsize() {
        $.ajax({
            type: "GET",
            url: "?controller=Product&function=getsize",
            datatype: "json",
            success: function (data) {
                obj = JSON.parse(data);
                if (typeof obj === "object") {
                    var len = obj.length;

                    // for (var i = 0; i < len; i++) {
                    //     $(".product_size").append(`
                 
                    // <option value="${obj[i].ID}">${obj[i].Product_Size}</option>

                    // `);

                    // }

                }

            }
        })
    }
    function getcolor() {
        $.ajax({
            type: "GET",
            url: "?controller=Product&function=getcolor",
            datatype: "json",
            success: function (data) {
                obj = JSON.parse(data);
                if (typeof obj === "object") {
                    var len = obj.length;

                    // for (var i = 0; i < len; i++) {
                    //     $(".product_color").append(`
                 
                    //     <option value="${obj[i].ID}">${obj[i].Product_Color}</option>
    
                    //     `);


                    // }

                }

            }
        })
    }
    onload();

    getcategory();
    getsize();
    getcolor();
    $(document).on('change', '.product_category', function () {
        var id = $(".product_category option:selected").val();

        if (id != '') {

            $.ajax({
                type: "POST",
                url: "?controller=Product&function=getsubcategory_id",
                data: { id: id },
                datatype: "json",
                success: function (data) {
                    obj = JSON.parse(data);
                    console.log(obj);
                    if (typeof obj === "object") {
                        var len = obj.length;
                        $(".product_subcategory").empty();
                        $(".product_subcategory").append(`<option value="" selected>Select</option>`);
                        for (var i = 0; i < len; i++) {
                            $(".product_subcategory").append(`
                        
                        <option value="${obj[i].ID}">${obj[i].Subcategory_Name}</option>
    
                        `);

                        }

                    }

                }
            })
        } else {
            $(".product_subcategory").empty();
            $(".product_subcategory").append(`<option value="" selected>Select</option>`);
        }
    })
    $(document).on('click', '.edit_product', function () {
        $(".product_data").hide();
        $(".update_product").css("display", "block");
        $(".page_name").text("Update product");

        var productid = $(this).closest('tr').find(".product_id").val();
        $(".product-id").val(productid);

        $.ajax({
            type: "POST",
            url: "?controller=Product&function=getproductby_id",
            data: { id: productid },
            datatype: "json",
            success: function (data) {
                obj = JSON.parse(data);
                if (typeof obj === "object") {
                    var len = obj.length;
                    for (var i = 0; i < len; i++) {
                        $(".product_name").val(obj[i][0].Product_Name);
                        $(".product_desc").val(obj[i][0].Product_Description);
                        $(".product_price").val(obj[i][0].Product_Price);
                        $(".product_quantity").val(obj[i][0].Product_Quantity);
                        $(".product_category").val(obj[i][0].Category_ID);
                        $(".product_color").val(obj[i][0].Product_Color_ID);
                        $(".product_size").val(obj[i][0].Product_Size);
                        getsubcategory_product(obj[i][0].Category_ID, obj[i][0].Subcategory_ID)
                        if (obj[i][0].IsTrending == 1) {
                            $("#switch16").attr('checked', true);
                        }
                    }
                }

            }
        })



    })
    function getsubcategory_product(id, sid) {
        if (id != '') {

            $.ajax({
                type: "POST",
                url: "?controller=Product&function=getsubcategory_id",
                data: { id: id },
                datatype: "json",
                success: function (data) {
                    obj = JSON.parse(data);
                    console.log(obj);
                    if (typeof obj === "object") {
                        var len = obj.length;
                        $(".product_subcategory").empty();
                        $(".product_subcategory").append(`<option value="" selected>Select</option>`);
                        for (var i = 0; i < len; i++) {
                            $(".product_subcategory").append(`<option value="${obj[i].ID}">${obj[i].Subcategory_Name}</option>`);
                            $(".product_subcategory").val(sid);
                        }
                    }
                }
            })
        } else {
            $(".product_subcategory").empty();
            $(".product_subcategory").append(`<option value="" selected>Select</option>`);
        }
    }
    $(document).on("click", ".delete_product", function () {
        var product_id = $(this).closest('tr').find(".product_id").val();
        if (confirm("Are you really want to delete data")) {
            $.ajax({
                type: "POST",
                url: "?controller=Product&function=delete_product",
                data: { id: product_id },
                datatype: "json",

                success: function () {
                    window.location.href = "?controller=Product&function=all_product";
                }
            })
        }

    })
    $('input[type="file"]').change(function (e) {
        for (var i = 0; i < this.files.length; i++) {
            var extension = e.target.files[i].name.split('.').pop().toLowerCase();
            if (extension === 'png' || extension === 'jpg' || extension === 'jpeg') {
                var reader = new FileReader();
                reader.readAsDataURL(this.files[i]);
                var fileName = e.target.files[i].name;

                $('.file_name').append(fileName + ',')
            }

        }
    });
    $("#validate_form").validate({
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
            files_image: {
                required: true,
                accept: ".jpg,.png,.jpeg"

            }

        },
        messages: {

            files_image: {

                accept: "Only image type jpg/png/jpeg is allowed"
            }

        }
    });
  

})
