<script>
    $(document).ready(function() {
        $('#dasarB').on('click',function() {
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
        $('#riwayat_pendidikan_formalB').on('click',function() {
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
        $('#riwayat_pendidikan_formalB').on('click',function() {
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
        $('#riwayat_pendidikan_formalB').on('click',function() {
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
        $('#riwayat_pendidikan_formalB').on('click',function() {
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
        $('#riwayat_pendidikan_formalB').on('click',function() {
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
        $('#riwayat_pendidikan_formalB').on('click',function() {
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
        $('#riwayat_pendidikan_formalB').on('click',function() {
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
        $('#riwayat_pendidikan_formalB').on('click',function() {
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
