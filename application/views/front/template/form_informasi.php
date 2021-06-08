<div class="row">

  <div class="col-lg-12">
    <?php echo form_open('arsip/cari_arsip', array("method" => "get")) ?>
    <div class="box box-warning box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <?php if (is_masteradmin()) {
            echo "???";
          } elseif (is_superadmin()) {
            echo "Deposito";
          } elseif (is_admin()) {
            echo "Pinjaman";
          } ?>
        </h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="Content" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="Content" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="Content" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="Content" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Deposito</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="Content" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jangka Waktu Deposito</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="Content" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Waktu Deposito</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="Content" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jatuh Tempo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="Content" disabled>
            </div>
          </div>
        </form>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>