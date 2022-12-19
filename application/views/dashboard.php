<body class="nav-sm footer_fixed ">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col ">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="dashboard" class="site_title"><i class="fa fa-paw"></i> <span>Pegawai</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <!-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> -->
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Admin</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="dashboard"><i class="fa fa-home"></i> Home <span
                                            class="fa fa-chevron-down"></span></a>

                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav fixed-top ">
                <div class="nav_menu py-2">
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="login"><i class="fa fa-sign-out pull-right"></i>
                                        Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col mt-5 pt-4" role="main">
                <div class="">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Data Pengajuan Dinas</h2>

                                    <ul class="nav navbar-right panel_toolbox">

                                        <li><a class="btn btn-md" href="#/plane" data-toggle="modal"
                                                data-target=".bs-example-modal-lg"><i class="fa fa-plane"></i> Tambah
                                                Data</a>
                                        </li>

                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Perjalanan Dinas</h4>
                                                        <button type="button" class="close" data-dismiss="modal"><span
                                                                aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-label-left input_mask" method="post"
                                                            action="post" enctype="multipart/form-data">

                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="row justify-content-center">
                                                                        <div
                                                                            class="col-lg-5 col-md-5 col-sm-5 col-xs-12  form-group ">
                                                                            <label>Nama</label>
                                                                            <input type="text" class="form-control "
                                                                                name="nama">
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-1 col-md-1 col-sm-1 col-xs-12  form-group text-center">
                                                                            <label><br><br><br></label>

                                                                        </div>

                                                                        <div
                                                                            class="col-lg-5 col-md-5 col-sm-5 col-xs-12  form-group ">
                                                                            <label>No Telp</label>
                                                                            <input type="text" class="form-control">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="row justify-content-center">
                                                                        <div
                                                                            class="col-lg-5 col-md-5 col-sm-5 col-xs-12  form-group ">
                                                                            <label>Kota</label>
                                                                            <select class="select2_single form-control"
                                                                                name="kota1" tabindex="-1">
                                                                                <option></option>
                                                                                <option value="semarang">
                                                                                    Semarang
                                                                                </option>
                                                                                <option value="Jakarta">Jakarta
                                                                                </option>
                                                                                <option value="Bandung">Bandung
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-1 col-md-1 col-sm-1 col-xs-12  form-group text-center">
                                                                            <label><br><br><br></label>
                                                                            <i class="fa fa-long-arrow-right"></i>
                                                                        </div>

                                                                        <div
                                                                            class="col-lg-5 col-md-5 col-sm-5 col-xs-12  form-group ">
                                                                            <label><br></label>
                                                                            <select class="select2_single form-control"
                                                                                name="kota2" tabindex="-1">
                                                                                <option></option>
                                                                                <option value="semarang">
                                                                                    Semarang
                                                                                </option>
                                                                                <option value="Jakarta">Jakarta
                                                                                </option>
                                                                                <option value="Bandung">Bandung
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="row justify-content-center">
                                                                        <div
                                                                            class="col-lg-5 col-md-5 col-sm-5 col-xs-12  form-group ">
                                                                            <label>Tanggal</label>
                                                                            <input type="date" class="form-control "
                                                                                id="d1" name="tgl1" onchange="calday()">
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-1 col-md-1 col-sm-1 col-xs-12  form-group text-center">
                                                                            <label><br><br><br></label>
                                                                            <i class="fa fa-long-arrow-right"></i>
                                                                        </div>

                                                                        <div
                                                                            class="col-lg-5 col-md-5 col-sm-5 col-xs-12  form-group ">
                                                                            <label><br></label>
                                                                            <input type="date" class="form-control"
                                                                                id="d2" name="tgl2" onchange="calday()">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="row justify-content-center">
                                                                        <div
                                                                            class="col-lg-11 col-md-11 col-sm-11 col-xs-12  form-group ">
                                                                            <label>Keterangan</label>

                                                                            <textarea id="message" required="required"
                                                                                class="form-control" name="ket" rows="4"
                                                                                data-parsley-minlength="30"
                                                                                data-parsley-maxlength="100"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="row justify-content-center">
                                                                        <div
                                                                            class="col-lg-6 col-md-6 col-sm-6 col-xs-12  form-group ">
                                                                            <div class="animated flipInY">
                                                                                <div class="tile-stats text-center">
                                                                                    <label class="mt-2"><strong>Total
                                                                                            Perjalanan
                                                                                            Dinas</strong></label>
                                                                                    <div class="count">
                                                                                        <p class="count" id="output">
                                                                                        </p> <span
                                                                                            class="text-info">Hari</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </form>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <li><a class="collapse-link btn"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box table-responsive">

                                                <table id="datatable" class="table table-striped table-bordered"
                                                    style="width:100%">
                                                    <thead class="text-center">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Kota</th>
                                                            <th>Tanggal</th>
                                                            <th>Keterangan</th>
                                                            <th>Status</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-center">




                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>




                                                    </tbody>



                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /page content -->