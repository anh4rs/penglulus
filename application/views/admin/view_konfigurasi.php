    <?php 
    $this->load->view('admin/header');
    ?>

    <div class="container">
        <h2>Konfigurasi</h2><hr>
        
        <form class="form-horizontal" method="post">
          <input type="hidden" name="cfgID" value="<?=$hsl['id'] ?>">
          <div class="form-group">
            <label class="col-sm-3 control-label">Nama Sekolah</label>
            <div class="col-sm-6">
              <input type="text" name="cfgSekolah" class="form-control" value="<?=$hsl['sekolah'] ?>" readonly>
          </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Tahun Pengumuman</label>
        <div class="col-sm-3">
          <input type="number" name="cfgTahun" class="form-control" min="2019" max="2025" value="<?=$hsl['tahun'] ?>" readonly>
      </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Tanggal Pengumuman</label>
    <div class="col-sm-3">
      <input type="date" name="cfgTanggal" class="form-control" value="<?=date('Y-m-d',strtotime($hsl['tgl_pengumuman'])) ?>" readonly> 
  </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Jam Pengumuman</label>
    <div class="col-sm-3">
      <input type="time" name="cfgJam" class="form-control" value="<?=date('H:i',strtotime($hsl['tgl_pengumuman'])) ?>" readonly>
  </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" name="submit" class="btn btn-primary" disabled="disabled">Simpan</button>
      <button type="button" id="btEnable" class="btn btn-link">Edit</button>
  </div>
</div>
</form>
</div>
<script>
    $('button[name="submit"]').prop('disabled', true);
    $('#btEnable').click(function() {
      $("input").removeAttr('readonly');
      $('button[name="submit"]').removeAttr('disabled');
  });
</script>
<?php 
$this->load->view('admin/footer');
?>