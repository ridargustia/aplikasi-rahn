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
        <?php if (is_superadmin()) { ?>
          <form>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $get_deposito->name ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $get_deposito->nik ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $get_deposito->address ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $get_deposito->email ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Deposito</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $get_deposito->jumlah ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Jangka Waktu Deposito</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $get_deposito->jangka_waktu ?> Tahun" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Waktu Deposito</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo date_only($get_deposito->waktu_deposito) ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Jatuh Tempo</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo date_only($get_deposito->jatuh_tempo) ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Resapan Dana</label>
              <div class="col-sm-10">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  Lihat Detail
                </button>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Total :</li>
                      <li class="list-group-item">Saldo :</li>
                      <li class="list-group-item">Hasil Berjalan :</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </form>
        <?php } ?>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    
  </div>
</div>