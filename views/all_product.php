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
    .error{
        color:red;
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
                                    <li class="breadcrumb-item"><a href="?controller=Admin&function=all_product" class="breadcrumb-link">Products</a></li>
                                    <li class="breadcrumb-item active page_name" aria-current="page">All Product </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">
                <!-- All products  -->
                <!-- ============================================================== -->

                <div class="col-12 product_data">
                    <div class="mb-2"><a href="?controller=Admin&function=add_product" class="btn btn-primary active">Add Product</a></div>
                    <div class="card">

                        <h5 class="card-header">All Product </h5>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first" id="product_table">
                                    <thead>
                                        <tr>
                                     
                                            <th>Product Name</th>
                                            <th>Image</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                       
                                    </tbody>


                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end product  -->
                <!-- update product -->
                <div class="row d-flex justify-content-center update_product" style="display:none!important">
                    <div class="col-10">
                        <div class="card">
                            <h5 class="card-header">Update Product</h5>
                            <div class="card-body">
                                <form id="validate_form">

                                    <div class="form-group">
                                        <input type="hidden" class="product-id">
                                        <label for="inputText1" class="col-form-label">Product Name</label>
                                        <input id="inputText1" type="text" class="form-control product_name" name="product_name" placeholder="Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Product Description</label>
                                        <textarea class="form-control product_desc" name="product_desc" id="exampleFormControlTextarea1" rows="3"></textarea>
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

                                        <input type="file" class="custom-file-input" id="chooseFile" name="files" multiple>
                                        <label class="custom-file-label form-control" for="customFile">Choose Image</label>
                                        <span class="form-file-text"></span>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block">Update Product</button>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>

<script src="./assets/js/product.js"></script>
