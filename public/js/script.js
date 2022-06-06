$(document).ready(function() {
    
    $("#formTambahMahasiswa").ready(function() {
        var jurusan = $("#jurusan");
        var idJur;
        
        jurusan.on("change", function() {
            this.idJur = jurusan.val();
            console.log(this.idJur);
            $.ajax("http://localhost/ti2022/db-mvc/public/mahasiswa/getProdi/"+this.idJur).done(function(data) {
                console.log(data);
                if(data != "") {
                    $("#prodi").html(data);
                } else {
                    $("#prodi").html("<option>---Prodi---</option>");
                }
            })
        });
    });

    $("#formEditMahasiswa").ready(function() {
        var jurusan = $("#jurusanEdit");
        var idJur = jurusan.val();
        var idProd = $("#idProd").val();

        $.ajax("http://localhost/ti2022/db-mvc/public/mahasiswa/getProdiEdit/"+idJur+"/"+idProd).done(function(data) {
            console.log(idJur);
            console.log(data);
            $("#prodiEdit").html(data);
        })

        $("#jurusanEdit").on("change", function() {
            this.idJur = jurusan.val();
            console.log(this.idJur);
            $.ajax("http://localhost/ti2022/db-mvc/public/mahasiswa/getProdi/"+this.idJur).done(function(data) {
                console.log(data);
                if(data != "") {
                    $("#prodiEdit").html(data);
                } else {
                    $("#prodiEdit").html("<option>---Prodi---</option>");
                }
            })
        })
    })

    $("#qrBtn").click(function() {
        $("#qrResult").html("");
        var qrVal = $("#qrVal").val();
        $("#qrResult").qrcode(qrVal);
        
    })
    
});