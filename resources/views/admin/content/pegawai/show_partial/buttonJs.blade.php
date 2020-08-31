<script>
    $(document).ready(function() {
        $('#dasarB').on('click',function() {
            $('#dasarB').addClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/dasarDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#riwayat_pendidikan_formalB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').addClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/riwayatPendidikanFormalDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#riwayat_diklat_fungsionalB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').addClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/riwayatDiklatFungsionalDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#riwayat_diklat_teknisB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').addClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/riwayatDiklatTeknisDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#riwayat_diklat_penjenjanganB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').addClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/riwayatDiklatPenjenjanganDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#riwayat_kepangkatanB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').addClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/riwayatKepangkatanDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#riwayat_jabatan_strukturalB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').addClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/riwayatJabatanStrukturalDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#riwayat_jabatan_fungsionalB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').addClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/riwayatJabatanFungsionalDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#riwayat_pekerjaanB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').addClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/riwayatPekerjaanDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#pasanganB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').addClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/pasanganDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#anakB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').addClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/anakDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#seminarB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').addClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/seminarDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#jasaB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').addClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/jasaDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#hukumB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').addClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/hukumDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#organisasiB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').addClass('active');
            $('#keluargaB').removeClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/organisasiDeta", true);
            xhttp.send();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#keluargaB').on('click',function() {
            $('#dasarB').removeClass('active');
            $('#riwayat_pendidikan_formalB').removeClass('active');
            $('#riwayat_diklat_fungsionalB').removeClass('active');
            $('#riwayat_diklat_teknisB').removeClass('active');
            $('#riwayat_diklat_penjenjanganB').removeClass('active');
            $('#riwayat_kepangkatanB').removeClass('active');
            $('#riwayat_jabatan_strukturalB').removeClass('active');
            $('#riwayat_jabatan_fungsionalB').removeClass('active');
            $('#riwayat_pekerjaanB').removeClass('active');
            $('#pasanganB').removeClass('active');
            $('#anakB').removeClass('active');
            $('#seminarB').removeClass('active');
            $('#jasaB').removeClass('active');
            $('#hukumB').removeClass('active');
            $('#organisasiB').removeClass('active');
            $('#keluargaB').addClass('active');
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText
                    $("#benda").fadeOut(400, function() {
                        $("#benda").html(data);
                        $("#benda").fadeIn(400);
                    }) ;
                }
            };
            xhttp.open("GET", "/keluargaDeta", true);
            xhttp.send();
        });
    });
</script>
