$(function() {

    $('.buttonTambahData').on('click', function() {
        
        $('.modal-title').html("Tambah Data Mahasiswa");
        $('.modal-footer button[type=submit]').html("Tambah Data");
        $('#nim').val('');
        $('#nama').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/tambah');

    })

    $('.tampilModalUbah').on('click', function() {
        
        $('.modal-title').html("Edit Data Mahasiswa");
        $('.modal-footer button[type=submit]').html("Edit Data");
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/edit');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getedit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nim').val(data.nim);
                $('#nama').val(data.nama);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });

    });
});