
    <h2>Daftar Supplier</h2>
<div class="row">
    <div class="col-6">
    <?php FlashMessage::Flash(); ?>
    </div>
</div>

<button type="button" class="btn btn-primary tombolTambah" data-bs-toggle="modal" data-bs-target="#formSupplier">
Tambah data
</button>
<div class="container">
<div class="row mt-3">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama Supplier</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $no=1;
        foreach ($data['supplier'] as $supplier) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $supplier['id']; ?></td>
                <td><?= $supplier['nama_supplier']; ?></td>
                <td><?= $supplier['notelp']; ?></td>
                <td><?= $supplier['email']; ?></td>
                <td><?= $supplier['alamat']; ?></td>
                <td>
                    <a href="<?= BASEURL;?>/supplier/hapus/<?= $supplier['id'] ?>" onclick="return confirm('Yakin akan menghapus data?')"><span data-feather='trash'></span>Hapus</a> | 
                    <a href="<?= BASEURL;?>/supplier/ubah/<?= $supplier['id'] ?>" data-bs-toggle="modal" data-bs-target="#formSupplier" class="modalUbahsupplier" data-id="<?= $supplier['id']?>"><span data-feather='edit'></span>Edit</a>
                </td>
            </tr>
        

    <?php $no++; endforeach;?>
    </tbody>
</table>
</div>
</div>

<!-- Modal -->

<div class="modal fade" id="formSupplier" tabindex="-1" aria-labelledby="formSupplierLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formSupplierLabel">Tambah data Supplier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASEURL ?>/supplier/tambah">
        <div class="row mb-3">
            <label for="inputNamaSupplier" class="col-sm-2 col-form-label">Nama Supplier</label>
            <div class="col-sm-8">
            <input type="hidden" class="form-control" id="id" name="id">
            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNotelp" class="col-sm-2 col-form-label">Nomor Telepon</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="notelp" name="notelp">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-8">
            <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="alamat" name="alamat">
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