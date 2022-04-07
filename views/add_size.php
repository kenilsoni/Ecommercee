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
                        <h2 class="pageheader-title">Size</h2>

                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="?controller=Admin&function=add_size" class="breadcrumb-link">Size</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Size </li>
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
                <!--  Size Detail -->
                <!-- ============================================================== -->
                <div class="col-12 size_detail">
                    <div class="mb-2"><a href="#" class="btn btn-primary active add_sizebtn">Add Size</a></div>
                    <div class="card">
                        <h5 class="card-header">Add size</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>Size Name</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>M</td>
                                            <td><a href="#" class="btn btn-rounded btn-primary edit_size">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>

                                            <td>L</td>

                                            <td><a href="#" class="btn btn-rounded btn-primary edit_size">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>


                                    </tbody>


                                </table>


                            </div>
                        </div>

                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- end Size detail  -->
                <!-- Add Size  -->
                <!-- ============================================================== -->

                <div class="row d-flex justify-content-center add_size" style="display:none!important">
                    <div class="col-10">
                        <div class="card">
                            <h5 class="card-header">Add Size</h5>
                            <div class="card-body">
                                <form>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Size Name</label>
                                        <input id="inputText3" type="text" class="form-control" placeholder="Size Name">
                                    </div>

                                    <a href="#" class="btn btn-primary btn-block">Add Size</a>

                                </form>
                            </div>

                        </div>

                    </div>


                </div>
                <!-- ============================================================== -->
                <!-- end Add Size  -->
                <!-- Update Size  -->
                <!-- ============================================================== -->

                <div class="row d-flex justify-content-center update_size" style="display:none!important">
                    <div class="col-10">
                        <div class="card">
                            <h5 class="card-header">Update Size</h5>
                            <div class="card-body">
                                <form>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Size Name</label>
                                        <input id="inputText3" type="text" class="form-control" placeholder="Size Name">
                                    </div>

                                    <a href="#" class="btn btn-primary btn-block">Update Size</a>

                                </form>
                            </div>

                        </div>

                    </div>


                </div>
                <!-- ============================================================== -->
                <!-- end Update Color  -->



            </div>

        </div>


    </div>
</div>
</div>
</div>

<?php include("footer.php"); ?>
<script src="./assets/js/size.js"></script>