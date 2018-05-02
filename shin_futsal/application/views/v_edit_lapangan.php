<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">
</head>
      <div class="card mb-3">
          <div class="card-body">
              <?php foreach($t_lapangan as $u){ ?>

                <form action="<?php echo base_url(). 'Crud/update'; ?>" method="post">
                    <div class="form-group">
                      <label for="usr">Nama:</label>
                      <input type="hidden" name="id_lapangan" value="<?php echo $u->id_lapangan ?>">
                      <input type="text" name="nama" value="<?php echo $u->nama ?>">
                    </div>
                    <div class="form-group">
                      <label for="usr">Harga Sewa:</label>
                      <input type="text" name="harga_sewa" value="<?php echo $u->harga_sewa ?>">
                    </div>
                    <div class="form-group">
                      <label for="usr">Keterangan:</label>
                      <input type="text" name="keterangan" value="<?php echo $u->keterangan ?>">
                    </div>
                   
                    <div>
                      <button type="submit" value="Simpan" class="btn btn-default" >Simpan</button>
                    </div>
                </form> 
              <?php } ?>

          </div>
      </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url ('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url ('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url ('assets/vendor/datatables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url ('assets/vendor/datatables/dataTables.bootstrap4.js')?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url ('assets/js/sb-admin.min.js')?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url ('assets/js/sb-admin-datatables.min.js')?>"></script>
  </div>
</body>
</html>
