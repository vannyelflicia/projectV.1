<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Control Of Activity PT.TBS</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url()?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url()?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Welcome Back, <?php echo $this->session->userdata('ses_nama');?>! As <?php echo $this->session->userdata('akses');?></a>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->

            <?php $this->load->view('menu');?>

            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <h1 class="page-header"><center>ACOUNT RECEIVABLE FORM </center></h1>
                <div  style="padding-bottom: 10px">
                    <a href="<?php echo base_url()."index.php/pagecontrol/dashAR"?>"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left  "></i>  BACK</button></a>
                </div>
                    <div class="panel panel-green">
                        <div class="panel-heading"></div>
                        <div class="panel-body">

                            <div class="row">
                            <div class="col-md-offset-2">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="<?php echo base_url()."index.php/pagecontrol/simpanAR"; ?>">
                                    <?php foreach ($editar as $r) { ?>
                                   		 <div class="form-group">
                                        <input type="hidden" class="form-control" name="no_transaksiar" value="<?php echo $r->no_transaksi ?>">
                                            <label>No. Transaksi</label><br>
                                            <label><?php echo $r->no_transaksi ?></label> 
                                        </div>
                                        <div class="form-group">
                                        <input type="hidden" class="form-control" name="IMOar" value="<?php echo $r->IMO ?>">
                                            <label>IMO</label><br>
                                            <label><?php echo $r->IMO ?></label> 
                                        </div>

                                        <div class="form-group">
                                            <label>No. Invoice Shipment 1</label>
                                            <input type="text" class="form-control" value="<?php echo $r->no_inv_ship ?>" name="no_inv_ship">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Dokumen Shipment 1 Date</label>
                                            <input class="form-control" value="<?php echo $r->tgl_dok_ship ?>" type="date" name="tgl_dok_ship">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Shipment 1 Date</label>
                                            <input class="form-control" value="<?php echo $r->tgl_inv_ship ?>" type="date" name="tgl_inv_ship">
                                        </div>
                                        <div class="form-group">
                                        <label>Invoice Shipment 1 Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $r->inv_ship_am ?>" name="inv_ship_am">
 
                                            <!-- <label>Invoice Shipment 1 Amount</label>
                                            <input id="harga" type="text" class="form-control" value="<?php echo $r->inv_ship_am ?>"  name="inv_ship_am">
                                            <input type="text" class="rupiah form-control" name="inv_ship_amkonv"> -->

                                        </div>
                                        <div class="form-group">
                                            <label>No. Faktur Pajak Shipment 1</label>
                                            <input class="form-control" value="<?php echo $r->no_faktur_ship ?>" type="date" name="no_faktur_ship">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Shipment 1 Payment Date</label>
                                            <input class="form-control" value="<?php echo $r->tgl_inv_ship_pay ?>" type="date" name="tgl_inv_ship_pay">
                                        </div>
                                        <div class="form-group">
                                            <label>No. RC Shipment 1</label>
                                            <input type="text" class="form-control" value="<?php echo $r->rc_ship ?>" name="rc_ship">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Shipment 1 Paid Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $r->inv_ship_paid_am ?>" name="inv_ship_paid_am">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Invoice Shipment 2</label>
                                            <input type="text" class="form-control" value="<?php echo $r->no_inv_ship2 ?>" name="no_inv_ship2">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Dokumen Shipment 2 Date</label>
                                            <input class="form-control" value="<?php echo $r->tgl_dok_ship2 ?>" type="date" name="tgl_dok_ship2">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Shipment 2 Date</label>
                                            <input class="form-control" value="<?php echo $r->tgl_inv_ship2 ?>" type="date" name="tgl_inv_ship2">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Shipment 2 Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $r->inv_ship_am2 ?>" name="inv_ship_am2">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Faktur Pajak Shipment 2</label>
                                            <input class="form-control" value="<?php echo $r->no_faktur_ship2 ?>" type="date" name="no_faktur_ship2">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Shipment 2 Payment Date</label>
                                            <input class="form-control" value="<?php echo $r->tgl_inv_ship_pay2 ?>" type="date" name="tgl_inv_ship_pay2">
                                        </div>
                                        <div class="form-group">
                                            <label>No. RC Shipment 2</label>
                                            <input type="text" class="form-control" value="<?php echo $r->rc_ship2 ?>" name="rc_ship2">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Shipment 2 Paid Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $r->inv_ship_paid_am2 ?>" name="inv_ship_paid_am2">
                                        </div>

                                        <div class="form-group">
                                            <label>No. Invoice ULI HUB Shipment 1</label>
                                            <input type="text" class="form-control" value="<?php echo $r->no_inv_uli ?>" name="no_inv_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Dokumen ULI HUB Shipment 1 Date</label>
                                            <input class="form-control" value="<?php echo $r->tgl_dok_uli ?>" type="date" name="tgl_dok_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice ULI HUB Shipment 1 Date</label>
                                            <input class="form-control" value="<?php echo $r->tgl_inv_uli ?>" type="date" name="tgl_inv_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice ULI HUB Shipment 1 Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $r->inv_uli_am ?>" name="inv_uli_am">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Faktur Pajak ULI HUB Shipment 1</label>
                                            <input class="form-control" value="<?php echo $r->no_faktur_uli ?>" type="text" name="no_faktur_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice ULI HUB Shipment 1 Payment Date</label>
                                            <input class="form-control" value="<?php echo $r->tgl_inv_uli_pay ?>" type="date" name="tgl_inv_uli_pay">
                                        </div>
                                        <div class="form-group">
                                            <label>No. RC ULI HUB Shipment 1</label>
                                            <input type="text" class="form-control" value="<?php echo $r->rc_uli ?>" name="rc_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice ULI HUB Shipment 1 Paid Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $r->inv_uli_paid_am ?>" name="inv_uli_paid_am">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Invoice ULI HUB Shipment 2</label>
                                            <input type="text" class="form-control" value="<?php echo $r->no_inv_uli2 ?>" name="no_inv_uli2">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Dokumen ULI HUB Shipment 2 Date</label>
                                            <input class="form-control" value="<?php echo $r->tgl_dok_uli2 ?>" type="date" name="tgl_dok_uli2">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice ULI HUB Shipment 2 Date</label>
                                            <input class="form-control" value="<?php echo $r->tgl_inv_uli2 ?>" type="date" name="tgl_inv_uli2">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice ULI HUB Shipment 2 Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $r->inv_uli_am2 ?>" name="inv_uli_am2">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Faktur Pajak ULI HUB Shipment 2</label>
                                            <input class="form-control" value="<?php echo $r->no_faktur_uli2 ?>" type="text" name="no_faktur_uli2">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice ULI HUB Shipment 2 Payment Date</label>
                                            <input class="form-control" value="<?php echo $r->tgl_inv_uli_pay2 ?>" type="date" name="tgl_inv_uli_pay2">
                                        </div>
                                        <div class="form-group">
                                            <label>No. RC ULI HUB Shipment 2</label>
                                            <input type="text" class="form-control" value="<?php echo $r->rc_uli2 ?>" name="rc_uli2">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice ULI HUB Shipment 2 Paid Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $r->inv_uli_paid_am2 ?>" name="inv_uli_paid_am2">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>No. Invoice Plug</label>
                                            <input type="text" class="form-control" value="<?php echo $r->no_plug ?>" name="no_plug">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Plug Date</label>
                                            <input type="date" class="form-control" value="<?php echo $r->inv_plugar_date ?>" name="inv_plugar_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Dokumen Plug</label>
                                            <input type="date" class="form-control" value="<?php echo $r->tgl_dok_plug ?>" name="tgl_dok_plug">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Plug Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $r->inv_plugar_am ?>" name="inv_plugar_am">
                                        </div>
                                        <div class="form-group">
                                            <label>Plug Payment Date</label>
                                            <input type="date" class="form-control" value="<?php echo $r->plug_pay_date ?>" name="plug_pay_date">
                                        </div>
                                        <div class="form-group">
                                            <label>No. RC Plug</label>
                                            <input type="text" class="form-control" value="<?php echo $r->rc_plug ?>" name="rc_plug">
                                        </div>
                                        <div class="form-group">
                                            <label>Plug Paid Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $r->pay_plug_paid ?>" name="pay_plug_paid">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" value="<?php echo $r->no_faktur ?>" name="no_faktur">
                                            <label>No. faktur Pajak</label><br>
                                            <label><?php echo $r->no_faktur ?></label>
                                        </div>
                                    <?php } ?>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                                <!-- /.col-lg-6 (nested) -->
                            </div>

                    
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <!-- /.col-lg- -->
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function(){
        $('#harga').change(function(){
            var id=$(this).val();
            $.ajax({
                url : "<?php echo base_url(); ?>index.php/pagecontrol/konversi",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(res) {
                    $('.rupiah').html(res.data);
                }
            })
        })
    })

    // $(document).ready(function(){
    //     $('#kategori').change(function(){
    //         var id=$(this).val();
    //         $.ajax({
    //             url : "<?php echo base_url(); ?>index.php/kategori/get_subkategori",
    //             method : "POST",
    //             data : {id: id},
    //             async : false,
    //             dataType : 'json',
    //             success: function(data){
    //                 var html = '';
    //                 var i;
    //                 for(i=0; i<data.length; i++){
    //                     html += '<option>'+data[i].subkategori_nama+'</option>';
    //                 }
    //                 $('.subkategori').html(html);
                     
    //             }
    //         });
    //     });
    // });
    // function(konversi{
    // var tes = document.getElementById("harga").value;
    //         document.getElementById("rupiah").value = tes;})
    </script>

</body>

</html>