@extends('admin.template')

@push('css')
@endpush


@section('title')
    Pegawai
@endsection


@section('titleContent')
    <div class="top-bar color-scheme-transparent masariuman-height103px">
        <div class="top-menu-controls masariuman-marginleft30px">
            <div class="icon-w top-icon masariuman-titlecontent">
            <div class="fa fa-users"></div>
            </div>
            <div class="masariuman-textleft">
                <span class="masariuman-bold">PEGAWAI</span> <br/>
                <small>Manajemen Pegawai</small>
            </div>
        </div>
        <div class="top-menu-controls">
            <button class="mr-2 mb-2 btn btn-outline-primary" type="button"><i class="batch-icon-bulb-2"></i> PETUNJUK <i class="batch-icon-bulb"></i></button>
        </div>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/it/pegawai">Pegawai</a>
        </li>
        <li class="breadcrumb-item">
            <span>Pegawai</span>
        </li>
    </ul>
@endsection


@section('content')
<h5 class="form-header">
    Master Pegawai
</h5>
 <div class="form-desc">
    Manajemen Data Pegawai
</div>
<div>
    <button class="mr-2 mb-2 btn btn-primary" data-target="#tambahModal" data-toggle="modal" type="button">Tambah Pegawai Baru</button>
</div>
<div class="table-responsive" id="pegawaiTable">
    table
  </div>
@endsection


@push('js')
    <script>
        $(document).ready(function() {
            $('#tabeldata').DataTable({
                "language": {
                    "search" : "Cari Data: ",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "emptyTable": "Tidak Ada Data Pegawai",
                    "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
                    "infoFiltered": "(Dicari dari _MAX_ total data)",
                    "lengthMenu": "Menampilkan _MENU_ Data",
                    "zeroRecords": "Data yang dicari tidak ada",
                    "paginate": {
                        "first":      "Pertama",
                        "last":       "Terakhir",
                        "next":       "Berikutnya",
                        "previous":   "Sebelumnya"
                    }
                }
            });
        } );
    </script>
    <script>
        $(document).ready(function() {
            $('#addForm').on('submit',function(e) {
                e.preventDefault();
                if($("#inputAddGelarDepan").val().length === 0 || $("#inputAddNama").val().length === 0 || $("#inputAddGelarBelakang").val().length === 0 || $("#inputAddTanggalLahir").val().length === 0 || $("#inputAddEmail").val().length === 0) {
                    swal("GAGAL !", "Terdapat data yang kosong !", "error")
                    if ($("#inputAddGelarDepan").val().length === 0) {
                        $("#inputAddGelarDepan").addClass('border-danger');
                    } else {
                        $("#inputAddGelarDepan").removeClass('border-danger');
                    }
                    if ($("#inputAddNama").val().length === 0) {
                        $("#inputAddNama").addClass('border-danger');
                    } else {
                        $("#inputAddNama").removeClass('border-danger');
                    }
                    if ($("#inputAddGelarBelakang").val().length === 0) {
                        $("#inputAddGelarBelakang").addClass('border-danger');
                    } else {
                        $("#inputAddGelarBelakang").removeClass('border-danger');
                    }
                    if ($("#inputAddTanggalLahir").val().length === 0) {
                        $("#inputAddTanggalLahir").addClass('border-danger');
                    } else {
                        $("#inputAddTanggalLahir").removeClass('border-danger');
                    }
                    if ($("#inputAddEmail").val().length === 0) {
                        $("#inputAddEmail").addClass('border-danger');
                    } else {
                        $("#inputAddEmail").removeClass('border-danger');
                    }
                } else {
                    $.ajax({
                        type: "POST",
                        url: "/it/pegawai",
                        data: $('#addForm').serialize(),
                        success: function (response) {
                            $("#tambahModal").modal('hide')
                            $("#inputAddGelarDepan").val('')
                            $("#inputAddNama").val('')
                            $("#inputAddGelarBelakang").val('')
                            $("#inputAddTanggalLahir").prop("type", "text")
                            $("#inputAddTanggalLahir").val('')
                            $("#inputAddEmail").val('')
                            swal("SUKSES !", "Data Pegawai baru berhasil ditambahkan !", "success");
                            const xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    $("#pegawaiTable").html(this.responseText);
                                }
                            };
                            xhttp.open("GET", "/pegawaiDeta", true);
                            xhttp.send();
                        },
                        error: function(error) {
                            swal("GAGAL !", "Terdapat kesalahan pada server. Silahkan hubungi pihak IT", "error");
                        }
                    });
                }
            });
        });
    </script>
@endpush


@section('modal')
    {{-- modal tambah --}}
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="tambahModal" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-lg modal-centered" role="document">
        <div class="modal-content text-center">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Tutup</span><span class="os-icon os-icon-close"></span></button>
          <div class="onboarding-side-by-side">
            <div class="onboarding-media">
              <img alt="" src="/iniTemplate/dist/iconModal/pegawaiAdd.png" width="200px">
            </div>
            <div class="onboarding-content with-gradient">
              <h4 class="onboarding-title">
                Tambah Pegawai Baru
              </h4>
              <div class="onboarding-text">
                Masukkan data dasar yang dibutuhkan untuk membuat data pegawai baru di bawah ini.
              </div>
              <form id="addForm">
                @csrf
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                        <input name="gelar_depan" id="inputAddGelarDepan" placeholder="Masukkan Gelar Depan.." type="text" class="form-control" />
                    </div>
                  </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="nama" id="inputAddNama" placeholder="Masukkan Nama.." type="text" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="gelar_belakang" id="inputAddGelarBelakang" placeholder="Masukkan Gelar Belakang.." type="text" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="tanggal_lahir" id="inputAddTanggalLahir" placeholder="Masukkan Tanggal Lahir.." type="text" onfocus="(this.type='date')" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="email" id="inputAddEmail" placeholder="Masukkan Email.." type="email" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <select class="mb-2 form-control" name="ruangan">
                            <option selected disabled>Pilih Ruangan...</option>
                            @foreach ($ruangan as $data)
                                <option value="{{$data->id}}">{{$data->ruangan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                  <div class="col-sm-12">
                    <div class="form-group text-center">
                        <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="submit">Tambah Pegawai Baru</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- end modal tambah --}}
@endsection
