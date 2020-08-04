<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Muatan
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Data Master</a></li>
        <li><a href="<?php echo site_url('C_Muatan'); ?>">Data Muatan</a></li>>
        <li class="active">Lihat Data Muatan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Lihat Data Muatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_Muatan/editMuatan')?>">
              <div class="box-body">
                <?php foreach ($muatan as $Muatan) { ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis muatan</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="jenismuatan" name="jenismuatan" placeholder="Jenis muatan" value="<?php echo $Muatan->jenismuatan ?>">
                    <input type="hidden" class="form-control" id="id" name="id" placeholder="Jenis muatan" value="<?php echo $Muatan->id_jenismuatan ?>">
                  <span id="pesan"></span>
                  </div>
                </div>
              </div>
              <?php } ?>
              <!-- /.box-body -->
              <div class="box-footer">
                  <div class="col-sm-10">
                    <a href="<?php echo site_url('C_Muatan'); ?>" class="btn btn-default">Kembali</a>
                    <button type="submit" class="btn btn-info">Simpan Data</button>
                  </div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>