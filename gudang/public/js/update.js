$(function(){
    // $('.tombolTambah').on('click',function(){
    //     $('#formMhsLabel').html('Tambah Data Mahasiswa');
    //     $('.modal-footer button[type=submit]').html('Simpan');

    // });

    // $('.modalUbah').on('click',function(){
    //     $('#formMhsLabel').html('Ubah Data Mahasiswa');
    //     $('.modal-footer button[type=submit]').html('Update');
    //     $('.modal-body form').attr('action','http://localhost/mhsmvc/public/mahasiswa/ubah')

    //     const id=$(this).data('id');

    //     $.ajax({
    //         url:'http://localhost/mhsmvc/public/mahasiswa/getubah',
    //         data:{id : id},
    //         method:'post',
    //         dataType:'json',
    //         success:function(data) {
    //             $('#nim').val(data.nim);
    //             $('#nama').val(data.nama_mhs);
    //             $('#tgl_lahir').val(data.tgl_lahir);
    //             $('#email').val(data.email);
    //             $('#jekel').val(data.jenis_kelamin);
    //             $('#alamat').val(data.alamat);
    //             $('#id').val(data.id);
    //             // console.log(data);
    //             if (data.jenis_kelamin=='P') {
    //                 $("#jekel_p").prop( "checked",true);
    //             } else {
    //                 $("#jekel_l").prop( "checked",true);
    //             }
                
    //         }
    //     });
    // });

    $('.tombolTambah').on('click',function(){
        $('#formBrgLabel').html('Tambah Data Barang');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.modalUbahbarang').on('click',function(){
        $('#formBrgLabel').html('Ubah Data Barang');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action','http://localhost/gudang/public/barang/ubah')
  
        const id=$(this).data('id');
  
        $.ajax({
            url:'http://localhost/gudang/public/barang/getubah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success:function(data) {
                $('#kode_barang').val(data.kode_barang);
                $('#nama_barang').val(data.nama_barang);
                $('#satuan').val(data.satuan);
                $('#id_jenis').val(data.id_jenis);
                // if(data.id_jenis==  $('#id_jenis').val(data.id_jenis))
                // {
                //  $('#id_jenis').prop("selected",true);
                // }
                $('#id_supplier').val(data.id_supplier);
                $('#harga').val(data.harga);
                $('#stok').val(data.stok);
                $('#id').val(data.id);
                // console.log(data);
              
                // if (data.jenis_kelamin=='P') {
                //     $("#jekel_p").prop( "checked",true);
                // } else {
                //     $("#jekel_l").prop( "checked",true);
                // }
                
            }
        });
    });

    $('.tombolTambahJenis').on('click',function(){
        $('#formJenisLabel').html('Tambah Data Jenis');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.modalUbahjenis').on('click',function(){
        $('#formJenisLabel').html('Ubah Data Jenis');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action','http://localhost/gudang/public/jenis/ubah')
  
        const id=$(this).data('id');
  
        $.ajax({
            url:'http://localhost/gudang/public/jenis/getubah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success:function(data) {
                $('#nama_jenis').val(data.nama_jenis);
                $('#keterangan').val(data.keterangan);
                $('#id').val(data.id);
                // console.log(data);
              
                // if (data.jenis_kelamin=='P') {
                //     $("#jekel_p").prop( "checked",true);
                // } else {
                //     $("#jekel_l").prop( "checked",true);
                // }
                
            }
        });
    });

    $('.tombolTambahSupplier').on('click',function(){
        $('#formSupplierLabel').html('Tambah Data Supplier');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.modalUbahsupplier').on('click',function(){
        $('#formSupplierLabel').html('Ubah Data Supplier');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action','http://localhost/gudang/public/supplier/ubah')
  
        const id=$(this).data('id');
  
        $.ajax({
            url:'http://localhost/gudang/public/supplier/getubah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success:function(data) {
                $('#nama_supplier').val(data.nama_supplier);
                $('#notelp').val(data.notelp);
                $('#email').val(data.email);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);
                // console.log(data);
              
                // if (data.jenis_kelamin=='P') {
                //     $("#jekel_p").prop( "checked",true);
                // } else {
                //     $("#jekel_l").prop( "checked",true);
                // }
                
            }
        });
    });
});