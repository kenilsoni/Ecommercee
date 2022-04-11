<!-- ============================================================== -->
<!-- navbar -->
<!-- ============================================================== -->
<?php include("navbar.php"); ?>
<!-- ============================================================== -->
<!-- end navbar -->
<!-- ============================================================== -->
<?php include("left_sidebar.php"); ?>
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<style>
    .error {
        color: red;
    }
    .imgGallery img{
        width: 100px;
        height: 100px;
        margin-right:20px;
    }
</style>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Products</h2>

                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="?controller=Product&function=all_product" class="breadcrumb-link">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Product </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <!-- Add product  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">
                <div class="row d-flex justify-content-center">
                    <div class="col-10">
                        <div class="card">
                            <h5 class="card-header">Add Product</h5>
                            <div class="card-body">
                                <form id="validate_form" action="?controller=Product&function=add_productdata" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="inputText1" class="col-form-label">Product Name</label>
                                        <input id="inputText1" type="text" class="form-control product_name" name="product_name" placeholder="Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Product Description</label>
                                        <textarea class="form-control" name="product_desc" id="exampleFormControlTextarea1 product_desc" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Price (Per Unit)</label>
                                        <input id="inputText4" type="number" name="product_price" class="form-control product_price" placeholder="Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText6" class="col-form-label">Quantity</label>
                                        <input id="inputText6" type="number" name="product_quantity" class="form-control product_quantity" placeholder="Quantity">
                                    </div>
                                    <div class="form-group">
                                        <label for="Category">Category</label><br>
                                        <select class="form-control product_category" name="product_category" id="Category">
                                            <option value="" selected>Select</option>


                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Sub_Category">Sub Category</label><br>
                                        <select class="form-control product_subcategory" name="product_subcategory" id="Sub_Category">
                                            <option value="" selected>Select</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_color">Product Color</label><br>
                                        <select class="form-control product_color" id="product_color" name="product_color">
                                            <option value="" selected>Select</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_size">Product Size</label><br>
                                        <select class="form-control product_size" id="product_size" name="product_size">
                                            <option value="" selected>Select</option>

                                        </select>
                                    </div>

                                    <div class="custom-file mb-3">

                                        <input type="file" name="files_image[]" class="custom-file-input" id="files_image"  multiple>
                                        <label class="custom-file-label form-control" for="chooseFile">Choose Image</label>
                                        
                                    </div>
                                    <div class="imgGallery mb-2">
                                        <!-- image preview -->
                                    </div>
                                    <!-- <input type="hidden" class="file_name" name="file_name"> -->
                                    <button type="submit"  class="btn btn-primary btn-block">Add Product</button>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end Add product  -->

        </div>
    </div>
</div>
</div>

<?php include("footer.php"); ?>

<script src="./assets/js/product.js"></script>