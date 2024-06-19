<!DOCTYPE html>
<html>

<head>
  <title>Create Kategori</title>
</head>

<body>

  <h2>Create Kategori</h2>

  <?php echo validation_errors(); ?>

  <?php if ($this->session->flashdata('message')): ?>
    <p><?php echo $this->session->flashdata('message'); ?></p>
  <?php endif; ?>

  <?php echo form_open('buku/createKategori'); ?>
  <form action="<?= base_url('buku/kategori'); ?>" method="post">
    <div class="modal-body">
      <div class="form-group">
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" class="form-control form-control-user" name="nama_kategori"
          placeholder="Masukkan Kategori Buku" value="<?= set_value('nama_kategori'); ?>">
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.history.back(-1)"></i>Close</button>
      <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
    </div>
  <!-- </form>

  <label for="nama_kategori">Nama Kategori</label>
  <input type="text" name="nama_kategori" />

  <br /><br />

  <input type="submit" value="Submit" />

  </form> -->

</body>

</html>