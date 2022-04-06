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
                        <h2 class="pageheader-title">City</h2>

                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">City</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add City </li>
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
                            <h5 class="card-header">Add City</h5>
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
                                        <label for="Category">Select State</label><br>
                                        <select class="form-control" name="languages" id="Category">
                                            <option value="javascriptq" selected>Select</option>
                                            <option value="javascript">PUNJAB</option>
                                            <option value="php">DELHI</option>
                                            <option value="java">GUJARAT</option>
                                            <option value="golang">BIHAR</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">City Name</label>
                                        <input id="inputText3" type="text" class="form-control" placeholder="City Name">
                                    </div>

                                    <a href="#" class="btn btn-primary btn-block">Add City</a>

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