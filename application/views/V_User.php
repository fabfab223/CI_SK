<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    {setMeta}

    {setHeader}
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <div class="container">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title">
                        <h1>Master User
                        </h1>
                    </div>
                    <!-- END PAGE TITLE -->
                    <!-- BEGIN PAGE TOOLBAR -->
                    <div class="page-toolbar">
                        
                    </div>
                    <!-- END PAGE TOOLBAR -->
                </div>
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class="page-content">
                <div class="container">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>Master User</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <div class="tab-pane" id="tab_1">
                        <div class="portlet-body">

                            <!-- BEGIN BORDERED TABLE PORTLET-->
                            <div class="portlet light portlet-fit ">
                                <div class="portlet-title">
                                    <div class="caption">

                                        <span class="caption-subject font-blue sbold uppercase">Master User</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn btn-sm active">
                                                <a class="btn blue btn-outline" data-toggle="modal" href="#basic"> Tambah </a>

                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable table-scrollable-borderless">
                                        <?php
                                        if (empty($hasil)) {
                                            echo "Tidak ada data";
                                        } else {
                                            ?>
                                            <table class="table table-hover table-light">
                                                <thead>
                                                    <tr class="uppercase">
                                                        <th> # </th>
                                                        <th> Nama </th>
                                                        <th> Jabatan </th>
                                                        <th> Jenis Kelamin </th>
                                                        <th> Divisi </th>
                                                        <th> Username </th>
                                                        <th> Password </th>
                                                        <th> Alamat </th>
                                                        <th> Tgl Lahir </th>
                                                        <th> No. Hp </th>
                                                        <th colspan="2"> Opsi </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($hasil as $data) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $no++; ?></td>
                                                            <td><?php echo $data->nama; ?></td>
                                                            <td><?php echo $data->id_jabatan; ?></td>
                                                            <td><?php echo $data->jenis_kelamin; ?></td>
                                                            <td><?php echo $data->divisi; ?></td>
                                                            <td><?php echo $data->username; ?></td>
                                                            <td><?php echo $data->password; ?></td>
                                                            <td><?php echo $data->alamat; ?></td>
                                                            <td><?php echo $data->tanggal_lahir; ?></td>
                                                            <td><?php echo $data->nomor_telp; ?></td>
                                                            <td scope="col" ><a class="btn blue btn-outline" data-toggle="modal" href="#basic">Edit</a></td>
                                                            <td scope="col"><a class="btn blue btn-outline" href="C_User/delete/<?php echo $data->id_user; ?>">Delete</a></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END BORDERED TABLE PORTLET-->
                            </td>
                            </tr>
                            <!-- Modal  -->
                            <div class="modal fade" id="basic" tabindex="-1" role="large" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="modal-body"><div class="portlet-body form">
                                                    <!-- BEGIN FORM-->
                                                    <form action="<?= base_url() ?>/index.php/C_user/tambahdata" method="post" class="horizontal-form">
                                                        <div class="form-body">
                                                            <h3 class="form-section">Tambah User</h3>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Nama Lengkap</label>
                                                                        <input type="text" id="nama" name="nama" class="form-control" placeholder="John Pantau">

                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">No. Handphone</label>
                                                                        <input maxlength="13" minlength="4" type="text" id="nomer" name="nomer" class="form-control" placeholder="083124763899">

                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">


                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Tanggal Lahir</label>
                                                                        <input type="date" class="form-control" name="tgl" placeholder="dd/mm/yyyy"> </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Jenis Kelamin</label>
                                                                        <div class="radio-list">
                                                                            <label class="radio-inline">
                                                                                <input type="radio" name="jk" id="optionsRadios1" value="L" checked> Laki - Laki</label>
                                                                            <label class="radio-inline">
                                                                                <input type="radio" name="jk" id="optionsRadios2" value="P"> Perempuan </label>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Jabatan</label>
                                                                        <select class="form-control" data-placeholder="Choose a Category" name="jabatan" tabindex="1">
                                                                            <option value="1">Karyawan</option>
                                                                            <option value="2">Admin</option>
                                                                            <option value="3">Head Divisi</option>
                                                                            <option value="4">Manager</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Divisi</label>
                                                                        <select class="form-control" name="divisi" data-placeholder="Choose a Category" tabindex="1">
                                                                            <option value="Admin">Admin</option>
                                                                            <option value="Software">Software</option>
                                                                            <option value="Hardware">Hardware</option>

                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-12 ">
                                                                    <div class="form-group">
                                                                        <label>Alamat</label>
                                                                        <input type="text" class="form-control" name="alamat"> </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Username</label>
                                                                        <input type="text" autocomplete="off" id="username" name="username" class="form-control">

                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Password</label>
                                                                        <input type="password" autocomplete="off" id="password" name="password" class="form-control">

                                                                    </div>
                                                                </div>
                                                                <!--/span-->

                                                            </div>
                                                        </div>
                                                        <div class="form-actions right">
                                                            <button type="button" class="btn default" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn blue">
                                                                <i class="fa fa-check"></i> Save</button>
                                                        </div>
                                                    </form>
                                                    <!-- END FORM-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->

</div>
<!-- END CONTAINER -->
{setFooter}
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>