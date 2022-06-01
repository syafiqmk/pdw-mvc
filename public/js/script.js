$(document).ready(function() {
    
    $("#formTambahMahasiswa").ready(function() {
        var jurusan = $("#jurusan");
        var idJur;

        jurusan.on("change", function() {
            idJur = jurusan.val();
            console.log(idJur);

            $.ajax("http://localhost/ti2022/db-mvc/public/mahasiswa/getProdi/"+idJur).done(function(data) {
                // console.log(data);
                var row = JSON.parse(data);
                if(row.length > 0) {
                    $("#prodi").html("<option id='prodOpt' value='[[id_prodi]]'></option>");
                    $("#prodOpt").val("[[id_prodi]]");
                    $("#prodOpt").html("[[nama_prodi]]");
                    $("#prodi").mirandajs(row);
                } else {
                    $("#prodi").html("<option id='prodOpt' value='[[id_prodi]]'></option>");
                    $("#prodOpt").html("---Prodi---");
                }
            })
        });
    });

});