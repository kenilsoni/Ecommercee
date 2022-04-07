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
                        <h2 class="pageheader-title">Color</h2>

                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="?controller=Admin&function=add_color" class="breadcrumb-link">Color</a></li>
                                    <li class="breadcrumb-item active page_name" aria-current="page">Add Color </li>
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

                <!--  Color Details  -->
                <div class="col-12 color_detail">
                    <div class="mb-2"><a href="#" class="btn btn-primary active add_colorbtn">Add Color</a></div>
                    <div class="card">
                        <h5 class="card-header">Add Color</h5>
                        <div class="card-body">


                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>Color Name</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>RED</td>
                                            <td><a href="#" class="btn btn-rounded btn-primary edit_color">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>

                                            <td>BLUE</td>

                                            <td><a href="#" class="btn btn-rounded btn-primary edit_color">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>


                                    </tbody>


                                </table>


                            </div>
                        </div>

                    </div>

                </div>
                <!-- End Color Details  -->
                <!-- Add Color  -->
                <!-- ============================================================== -->

                <div class="row d-flex justify-content-center add_color" style="display:none!important">
                    <div class="col-10">
                        <div class="card">
                            <h5 class="card-header">Add Color</h5>
                            <div class="card-body">
                                <form>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Color Name</label>
                                        <input id="inputText3" type="text" class="form-control" placeholder="Color Name">
                                    </div>

                                    <a href="#" class="btn btn-primary btn-block">Add Color</a>

                                </form>
                            </div>

                        </div>

                    </div>


                </div>
                <!-- ============================================================== -->
                <!-- end Add Color  -->
                <!-- Update Color  -->
                <!-- ============================================================== -->

                <div class="row d-flex justify-content-center update_color" style="display:none!important">
                    <div class="col-10">
                        <div class="card">
                            <h5 class="card-header">Update Color</h5>
                            <div class="card-body">
                                <form>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Color Name</label>
                                        <input id="inputText3" type="text" class="form-control" placeholder="Color Name">
                                    </div>

                                    <a href="#" class="btn btn-primary btn-block">Update Color</a>

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

<?php include("footer.php"); ?>
<script src="./assets/js/color.js"></script>