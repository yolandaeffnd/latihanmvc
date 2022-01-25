
    <h2>Daftar Barang</h2>
<div class="row">
    <div class="col-6">
    <?php FlashMessage::Flash(); ?>
    </div>
</div>

<button type="button" class="btn btn-primary tombolTambah" data-bs-toggle="modal" data-bs-target="#formBrg">
Tambah data
</button>
<div class="container">
<div class="row mt-3">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Jenis</th>
            <th>Supplier</th>
            <th>Harga</th>
            <th>Stok</th>
            
        </tr>
    </thead>
    <tbody>
    <?php 
        $no=1;
        foreach ($data['barang'] as $brg) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $brg['kode_barang']; ?></td>
                <td><?= $brg['nama_barang']; ?></td>
                <td><?= $brg['satuan']; ?></td>
                <td><?= $brg['nj']; ?></td>
                <td><?= $brg['nsp']; ?></td>
                <td><?= $brg['harga']; ?></td>
                <td><?= $brg['stok']; ?></td>
                <td>
                    <a href="<?= BASEURL;?>/barang/hapus/<?= $brg['id'] ?>" onclick="return confirm('Yakin akan menghapus data?')"><span data-feather='trash'></span>Hapus</a> | 
                    <a href="<?= BASEURL;?>/barang/ubah/<?= $brg['id'] ?>" data-bs-toggle="modal" data-bs-target="#formBrg" class="modalUbahbarang" data-id="<?= $brg['id']?>"><span data-feather='edit'></span>Edit</a>
                </td>
            </tr>
        

    <?php $no++; endforeach;?>
    </tbody>
</table>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formBrg" tabindex="-1" aria-labelledby="formBrgLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formBrgLabel">Tambah data Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= BASEURL ?>/barang/tambah">
        <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">kode barang</label>
            <div class="col-sm-8">
            <input type="hidden" class="form-control" id="id" name="id">
            <input type="text" class="form-control" id="kode_barang" name="kode_barang">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">Satuan</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="satuan" name="satuan">
            </div>
        </div>
        <!-- <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">Jenis</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="id_jenis" name="id_jenis">
            </div>
        </div> -->
<!--        
        <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">Supplier</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="id_supplier" name="id_supplier">
            </div>
        </div> -->
        <div class="mb-3">
        <label for="select" class="col-sm-2 col-form-label">Jenis</label>
            <div class="col-sm-8">
                <select id="id_jenis" name="id_jenis" class="form-select">
                <?php

                        foreach($data['jenis'] as $row) 
                        {
                            echo "<option value=".$row['id']. ">" .$row['nama_jenis']. "</option>";
                        }
                ?>
                                </select>
            </div>
           
         </div>
         <div class="mb-3">
         <label for="select" class="col-sm-2 col-form-label">Supplier</label>
            <div class="col-sm-8">
                <select id="id_supplier" name="id_supplier" class="form-select">
                <?php

                foreach($data['supplier'] as $row) {
                  echo "<option value=".$row['id']. ">" .$row['nama_supplier']. "</option>";
                }
              ?>
                </select>
            </div>
           
         </div>
        <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="harga" name="harga">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNama" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="stok" name="stok">
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