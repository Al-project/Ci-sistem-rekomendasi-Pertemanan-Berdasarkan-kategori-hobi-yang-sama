<?php
	$this->load->view('header_admin');
?>    

	<div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Panel
                        <small>Eksekusi Data</small>
                    </h1>

<div class="row">
    <div class="col-lg-12"><br />
       
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('klasifikasi'); ?>">Klasifikasi</a></li>
			<li><a href="<?php echo base_url('klasifikasii'); ?>">Klasifikasi 2</a></li>
            <li class="active">Hasil Akurasi</li>
        </ol>

        <?php
            echo validation_errors();
            //buat message nis
            if(!empty($message)) {
            echo $message;
            }
        ?>

    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">

        <div class="panel panel-default">

            <div class="panel-heading">
                Detail Hasil
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            <?php echo form_open('klasifikasii/klasifikasi', array('class' => 'form-horizontal')) ?>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Prediksi Kategori</p>

                    <div class="col-sm-10">
                        <input type="text" name="kode_hobi" class="form-control" placeholder="Kode Buku" value="<?php echo $kode_hobi; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Akurasi </p>

                    <div class="col-sm-10">
                        <input type="text" name="jenis" class="form-control" placeholder="Jenis Hobi" 
                        value="<?php echo $akurasi; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Presisi </p>

                    <div class="col-sm-10">
                        <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" value="<?php echo $presisi; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Recall </p>

                    <div class="col-sm-10">
                        <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" value="<?php echo $recall; ?>">
                    </div>
                </div>
				
				
				
				

            <?php echo form_close(); ?>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>



<!-- jQuery -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Datepicker -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/js/bootstrap-datepicker.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Datepicker -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/js/tinymce/tinymce.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>