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
                        <h2 class="pageheader-title">State</h2>

                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="?controller=Admin&function=add_state" class="breadcrumb-link">State</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add State </li>
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
                <!--  state detail -->
                <!-- ============================================================== -->
                <div class="col-12 state_data">
                    <div class="mb-2"><a href="#" class="btn btn-primary active add_statebtn">Add State</a></div>
                    <div class="card">
                        <h5 class="card-header">All State</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead>
                                        <tr>

                                            <th>Country Name</th>
                                            <th>State Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>



                                            <td>id000004 </td>
                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary edit_state">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>


                                            <td>id000004 </td>
                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary edit_state">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>


                                            <td>id000004 </td>
                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary edit_state">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>


                                    </tbody>


                                </table>

                            </div>

                        </div>


                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end state detail  -->
                <!-- add state -->
                <div class="row d-flex justify-content-center add_state" style="display:none!important">
                    <div class="col-10">
                        <div class="card">
                            <h5 class="card-header">Add State</h5>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="Category">Select Country</label><br>
                                        <select class="form-control" name="languages" id="Category">
                                            <option value="javascriptq" selected>Select</option>
                                            <option value="javascript">INDIA</option>
                                            <option value="php">JAPAN</option>
                                            <option value="java">NEPAL</option>
                                            <option value="golang">IRAN</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Country Name</label>
                                        <input id="inputText3" type="text" class="form-control" placeholder="State Name">
                                    </div>

                                    <a href="#" class="btn btn-primary btn-block">Add State</a>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end Add state  -->
            <!-- update state -->
            <div class="row d-flex justify-content-center update_state" style="display:none!important">
                <div class="col-10">
                    <div class="card">
                        <h5 class="card-header">Update State</h5>
                        <div class="card-body">
                            <form>

                                <div class="form-group">
                                    <label for="inputText3" class="col-form-label">State Name</label>
                                    <input id="inputText3" type="text" class="form-control" placeholder="State Name">
                                </div>

                                <a href="#" class="btn btn-primary btn-block">Update State</a>

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
<script src="./assets/js/state.js"></script>