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
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Sub Category</h2>

                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="?controller=Admin&function=all_subcategory" class="breadcrumb-link">Sub-Category</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Sub-Category </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <!-- Add subcategory  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">
                <div class="row d-flex justify-content-center">
                    <div class="col-10">

                        <div class="card">
                            <h5 class="card-header">Add Sub-Category</h5>
                            <div class="card-body">
                                <form id="validate_form">
                                    <div class="form-group">
                                        <label for="Category">Select Category</label><br>
                                        <select class="form-control" name="Category" id="Category">
                                            <option value="" selected>Select</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Sub-Category Name</label>
                                        <input id="inputText3" name="subcategory_name" type="text" class="form-control" placeholder="Name">
                                    </div>

                                    <button type="button" id="add_subcategory" class="btn btn-primary btn-block">Add Sub-Category</button>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end Add subcategory  -->

        </div>
    </div>
</div>
</div>

<?php include("footer.php"); ?>
<script src="./assets/js/subcategory.js"></script>