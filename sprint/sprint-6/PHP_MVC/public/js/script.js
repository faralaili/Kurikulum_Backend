$(function(){

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });
    
    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Kurikulum-Backend/sprint/Sprint6/PHP_MVC/public/Mahasiswa/ubah');

        const id = $(this).data('id');
        console.log(id);

        $.ajax({
           url: 'http://localhost/Kurikulum-Backend/Sprint6/sprint/PHP_MVC/public/Mahasiswa/getubah',
           data: {id : id},
           method: 'post',
           dataType: 'json',
           success: function(data) {
               console.log(data);
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#jurusan').val(data.jurusan);
           }
        });

    });

});