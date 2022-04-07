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
                        <h2 class="pageheader-title">Category</h2>

                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="?controller=Admin&function=all_category" class="breadcrumb-link">Category</a></li>
                                    <li class="breadcrumb-item active page_name" aria-current="page">All Category </li>
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
                <!-- All Category  -->
                <!-- ============================================================== -->

                <div class="col-12 category_data">
                    <div class="mb-2"><a href="?controller=Admin&function=add_category" class="btn btn-primary active">Add Category</a></div>
                    <div class="card">
                        <h5 class="card-header">All Category</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead>
                                        <tr>

                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>


                                            <td>id000001 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>


                                            <td>id000002 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>


                                            <td>id000003 </td>


                                            <td><a href="#" class="btn btn-rounded btn-primary edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>


                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>


                                            <td>id000004 </td>


                                            <td><a href="#" class="btn btn-rounded btn-primary edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>


                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>


                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>



                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>


                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>


                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>


                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>


                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>

                                    </tbody>


                                </table>

                            </div>

                        </div>


                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end ALL category  -->
                <!-- update category -->
                <div class="row d-flex justify-content-center update_category" style="display:none!important">
                    <div class="col-10">
                        <div class="card">
                            <h5 class="card-header">Update Category</h5>
                            <div class="card-body">
                                <form>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Category Name</label>
                                        <input id="inputText3" type="text" class="form-control" placeholder="Category Name">
                                    </div>

                                    <a href="#" class="btn btn-primary btn-block">Update Category</a>

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
<script src="./assets/js/category.js"></script>