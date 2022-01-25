
    <h2>Daftar Jenis</h2>
<div class="row">
    <div class="col-6">
    <?php FlashMessage::Flash(); ?>
    </div>
</div>

<button type="button" class="btn btn-primary tombolTambahJenis" data-bs-toggle="modal" data-bs-target="#formJenis">
Tambah data
</button>
<div class="container">
<div class="row mt-3">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama Jenis</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $no=1;
        foreach ($data['jenis'] as $jenis) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $jenis['id']; ?></td>
                <td><?= $jenis['nama_jenis']; ?></td>
                <td><?= $jenis['keterangan']; ?></td>
                <td>
                    <a href="<?= BASEURL;?>/jenis/hapus/<?= $jenis['id'] ?>" onclick="return confirm('Yakin akan menghapus data?')"><span data-feather='trash'></span>Hapus</a> | 
                    <a href="<?= BASEURL;?>/jenis/ubah/<?= $jenis['id'] ?>" data-bs-toggle="modal" data-bs-target="#formJenis" class="modalUbahjenis" data-id="<?= $jenis['id']?>"><span data-feather='edit'></span>Edit</a>
                </td>
            </tr>
        

    <?php $no++; endforeach;?>
    </tbody>
</table>
</div>
</div>

<!-- Modal -->

<div class="modal fade" id="formJenis" tabindex="-1" aria-labelledby="formJenisLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formJenisLabel">Tambah data Jenis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASEURL ?>/jenis/tambah">
        <div class="row mb-3">
            <label for="inputNamaJenis" class="col-sm-2 col-form-label">Nama Jenis</label>
            <div class="col-sm-8">
            <input type="hidden" class="form-control" id="id" name="id">
            <input type="text" class="form-control" id="nama_jenis" name="nama_jenis">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputKeterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="keterangan" name="keterangan">
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>