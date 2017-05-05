<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    {setMeta}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
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
                        <h1>Daftar Surat Ijin
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
                            <span>Surat Ijin</span>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>Daftar Surat Ijin</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->
                    <div class="tab-pane" id="tab_1">
                        <div class="portlet-body">

                            <!-- BEGIN BORDERED TABLE PORTLET-->
                            <!--div class="portlet light portlet-fit " -->
                            <div class="modal-body"><div class="portlet-body form">
                                    <div class="portlet-title">
                                        <div class="caption">

                                            <span class="caption-subject font-blue sbold uppercase">Daftar Surat Ijin</span><br><br>
                                        </div>

                                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                                        <div class="portlet box blue">
                                            <div class="portlet-title">
                                                <div class="caption"></div>
                                                <div class="tools">

                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered" id="tbl_user">
                                                        <?php
                                                        if (empty($hasil)) {
                                                            echo "Tidak ada data";
                                                        } else {
                                                            ?>
                                                            <thead>
                                                                <tr>
                                                                    <th width ="1"> No. </th>
                                                                    <th width ="195"> Nama </th>
                                                                    <th width ="145"> No. Surat </th>
                                                                    <th width ="115"> Jenis Kelamin </th>
                                                                    <th width ="115"> Divisi </th>
                                                                    <th width ="115"> Keperluan </th>
                                                                    <th width ="115"> Alasan </th>
                                                                    <th width ="115"> Lama Ijin </th>
                                                                    <th width ="115"> Tanggal Disetujui</th>
                                                                    <th width ="115">Opsi</th>
                                                                </tr>
                                                            <tbody>
                                                                <?php
                                                                $no = 1;
                                                                foreach ($hasil as $data) {
                                                                    ?>
                                                                    <tr>
                                                                        <td width="40"><?php echo $no++; ?></td>
                                                                        <td width ="195"><?php echo $data->nama; ?></td>
                                                                        <td width ="145"><?php echo $data->nomor_surat; ?></td>
                                                                        <td width ="115"><?php echo $data->jenis_kelamin; ?></td>
                                                                        <td width ="115"><?php echo $data->divisi; ?></td>
                                                                        <td width ="115"><?php echo $data->keperluan; ?></td>
                                                                        <td width ="115"><?php echo $data->alasan; ?></td>
                                                                        <td width ="115"><?php echo $data->tawal_izin; ?> S/d <?php echo $data->takhir_izin; ?></td>
                                                                        <td width ="115"><?php echo $data->tanggal_setuju; ?></td>
                                                                        <td width ="115"><a class="btn green btn-outline btn-xs btn-ubah" data-toggle="modal" id="<?= $data->id_izin ?>" href="#edit">Edit</a> 
                                                                            <a class="btn yellow btn-outline btn-xs" href="<?php echo site_url() ?>/Tmb_surat/verifikasi/<?php echo $data->id_izin?>" >Verifikasi</a>
                                                                            <a class="btn blue btn-outline btn-xs">Detail</a>
                                                                            <a class="btn red btn-outline btn-xs" href="Dftr_surat/delete/<?php echo $data->id_izin; ?>">Delete</a></td>
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
                                        <!-- END SAMPLE TABLE PORTLET-->
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable table-scrollable-borderless">
                                    <div class="col-md-6">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END BORDERED TABLE PORTLET-->
                        <!-- Modal  -->
                        <div class="modal fade" id="edit" tabindex="-1" role="large" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="modal-body"><div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="<?= base_url() ?>/index.php/Dftr_surat/updatedata" method="post" class="horizontal-form">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="form-group">
                                                                    <label class="control-label">Nomor Surat</label>
                                                                    <input type="hidden" id="id_izin" name="id_izin" class="id_izin">
                                                                    <input type="text" id="nosur" name="nosur" class="form-control nosur">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Nama Lengkap</label>
                                                                    <input type="text" id="nama" name="nama" class="form-control nama" placeholder="John Pantau">
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Jenis Kelamin</label>
                                                                    <div class="radio-list">
                                                                        <label class="radio-inline">
                                                                            <input type="radio" name="jk" id="jkL" value="L"> Laki - Laki</label>
                                                                        <label class="radio-inline">
                                                                            <input type="radio" name="jk" id="jkP" value="P"> Perempuan </label>
                                                                    </div>										
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Divisi</label>
                                                                        <select class="form-control jabatan" id="jabatan" name="jabatan" tabindex="1">
                                                                            <option value="Admin">Admin</option>
                                                                            <option value="Software">Software</option>
                                                                            <option value="Hardware">Hardware</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/row-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Keperluan</label><br>
                                                                    <div class="radio-list">
                                                                        <label class="radio-inline">
                                                                            <input type="radio" name="keperluan" id="keperluanIjinCuti" value="IjinCuti"> Ijin/Cuti</label>
                                                                        <label class="radio-inline">
                                                                            <input type="radio" name="keperluan" id="keperluanTerlambat" value="Terlambat"> Terlambat </label>
                                                                        <label class="radio-inline">
                                                                            <input type="radio" name="keperluan" id="keperluanDinasLuar" value="DinasLuar"> Dinas Luar </label>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Alasan</label>
                                                                    <input type="text" name="alasan" id="alasan" class="form-control alasan"> </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Lama Ijin</label>
                                                                    <div class="input-group input-large date-picker input-daterange " data-date="10/11/2012" data-date-format="yyyy-mm-dd hh:mm:ss">
                                                                        <input type="text" class="form-control from" name="from">
                                                                        <span class="input-group-addon"> S/d </span>
                                                                        <input type="text" class="form-control to" name="to"> </div>
                                                                    <!-- /input-group -->
                                                                </div>
                                                            </div>
                                                            <!--/span-->

                                                        </div>
                                                        <div class="form-actions right">
                                                            <button type="submit" class="btn blue">
                                                                <i class="fa fa-check"></i> Simpan</button>
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
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
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
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
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
    <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
    <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
    <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    <script>
        $(document).ready(function () {
            $("#tbl_user").on("click", ".btn-ubah", function () {
                var id = $(this).attr("id");

                $.ajax({
                    url: '<?= base_url() ?>index.php/Dftr_surat/getizin',
                    type: 'post',
                    data: "id=" + id,
                    dataType: "JSON",
                    success: function (data) {
                        $(".modal#edit .modal-body .id_izin").val(data[0].id_izin);
                        $(".modal#edit .modal-body .nosur").val(data[0].nomor_surat);
                        $(".modal#edit .modal-body .nama").val(data[0].nama);
                        $(".modal#edit .modal-body #jk" + data[0].jenis_kelamin)
                                .parent("span")
                                .addClass("checked");
                        //                    if (data[0].jenis_kelamin == "L") {
                        //                        $(".modal#basic .modal-body #jkL")
                        //                    .parent("span")
                        //                    .addClass("checked");   
                        //                    }else{
                        //                        $(".modal#basic .modal-body #jkP")
                        //                    .parent("span")
                        //                    .addClass("checked")
                        //                    }
                        $(".modal#edit .modal-body .jabatan").val(data[0].divisi);
                        $(".modal#edit .modal-body #keperluan" + data[0].keperluan)
                                .parent("span")
                                .addClass("checked");
                        $(".modal#edit .modal-body .alasan").val(data[0].alasan);
                        $(".modal#edit .modal-body .from").val(data[0].tawal_izin);
                        $(".modal#edit .modal-body .to").val(data[0].takhir_izin)
                        $(".modal#basic").modal("show");
                        console.log(data);
                    }
                })
            })
        })
    </script>    
</body>
</html>