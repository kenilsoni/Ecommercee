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
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Category</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Category </li>
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

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">All Product</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>Category ID</th>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>Product #1 </td>
                                            <td>id000001 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>

                                            <td>Product #2 </td>
                                            <td>id000002 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>

                                            <td>Product #3 </td>
                                            <td>id000003 </td>


                                            <td><a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>

                                            <td>Product #4 </td>
                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>

                                            <td>Product #4 </td>
                                            <td>id000004 </td>


                                            <td><a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>

                                            <td>Product #4 </td>
                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>

                                            <td>Product #4 </td>
                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>


                                            <td>Product #4 </td>
                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>

                                            <td>Product #4 </td>
                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>

                                            <td>Product #4 </td>
                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>

                                            <td>Product #4 </td>
                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>
                                        <tr>

                                            <td>Product #4 </td>
                                            <td>id000004 </td>



                                            <td><a href="#" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#edit_category">Edit</a>&nbsp;<a href="#" class="btn btn-rounded btn-danger">Delete</a> </td>
                                        </tr>

                                    </tbody>


                                </table>
                                <!-- Edit Modal -->
                                <div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content ">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="Category">Category</label><br>
                                                        <select class="form-control" name="languages" id="Category">
                                                            <option value="javascriptq" selected>Select</option>
                                                            <option value="javascript">MEN</option>
                                                            <option value="php">WOMEN</option>
                                                            <option value="java">KIDS</option>
                                                            <option value="golang">ACCESSORIES</option>

                                                        </select>
                                                    </div>


                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Update changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end ALL category  -->
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>