@extends('admin.template')

@push('css')
@endpush


@section('title')
    Ruangan
@endsection


@section('titleContent')
    <div class="top-bar color-scheme-transparent masariuman-height103px">
        <div class="top-menu-controls masariuman-marginleft30px">
            <div class="icon-w top-icon masariuman-titlecontent">
            <div class="os-icon os-icon-layout"></div>
            </div>
            <div class="masariuman-textleft">
                <span class="masariuman-bold">RUANGAN</span> <br/>
                <small>Manajemen Ruangan</small>
            </div>
        </div>
        <div class="top-menu-controls">
            <button class="mr-2 mb-2 btn btn-outline-primary" type="button"><i class="batch-icon-bulb-2"></i> PETUNJUK <i class="batch-icon-bulb"></i></button>
        </div>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/it/ruangan">Ruangan</a>
        </li>
        <li class="breadcrumb-item">
            <span>Ruangan</span>
        </li>
    </ul>
@endsection


@section('content')
<h5 class="form-header">
    Master Ruangan
</h5>
 <div class="form-desc">
    Manajemen Data Ruangan
</div>
<div>
    <button class="mr-2 mb-2 btn btn-primary" data-target="#tambahModal" data-toggle="modal" type="button">Tambah Ruangan Baru</button>
</div>
<div class="table-responsive" id="ruanganTable">
    <table id="tabeldata" width="100%" class="table table-striped table-lightfont">
        <thead>
            <tr>
                <th>NO</th>
                <th>Ruangan</th>
                <th>Aksi</th>
            </tr>
        <tbody>
            @foreach ( $ruangan as $no => $data )
                <tr>
                    <td id="{{ $data->id }}">{{ $no+1 }}</td>
                    <td>{{ $data->ruangan }}</td>
                    <td>
                        <button class="mr-2 mb-2 btn btn-warning editButton" type="button" data="{{ $data }}">Ubah</button>
                        |
                        <button class="mr-2 mb-2 btn btn-danger deleteButton" type="button" data="{{ $data }}">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
@endsection


@push('js')
    <script>
        $(document).ready(function() {
            $('#tabeldata').DataTable({
                "language": {
                    "search" : "Cari Data: ",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "emptyTable": "Tidak Ada Data Ruangan",
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
                if($("#inputAddRuangan").val().length === 0) {
                    swal("GAGAL !", "Nama Ruangan Tidak Boleh Kosong !", "error")
                    $("#inputAddRuangan").addClass('border-danger');
                } else {
                    $.ajax({
                        type: "POST",
                        url: "/it/ruangan",
                        data: $('#addForm').serialize(),
                        success: function (response) {
                            $("#tambahModal").modal('hide')
                            $("#inputAddRuangan").val('')
                            swal("SUKSES !", "Data ruangan baru berhasil ditambahkan !", "success");
                            const xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    $("#ruanganTable").html(this.responseText);
                                }
                            };
                            xhttp.open("GET", "/ruanganDeta", true);
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
    <script>
        $(document).ready(function() {
            $('.editButton').on('click',function() {
                $('#editModal').modal('show');
                var data = JSON.parse($(this).attr("data"));
                $("#inputEditId").val(data.id);
                $("#inputEditRuangan").val(data.ruangan);
            });

            $('#editForm').on('submit',function(e) {
                e.preventDefault();
                if($("#inputEditRuangan").val().length === 0) {
                    swal("GAGAL !", "Nama Ruangan Tidak Boleh Kosong !", "error")
                    $("#inputEditRuangan").addClass('border-danger');
                } else {
                    var id = $('#inputEditId').val();
                    $.ajax({
                        type: "POST",
                        url: "/it/ruangan/"+id,
                        data: $('#editForm').serialize(),
                        success: function (response) {
                            $("#editModal").modal('hide')
                            swal("SUKSES !", "Nama ruangan berhasil diubah !", "success");
                            const xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    $("#ruanganTable").html(this.responseText);
                                }
                            };
                            xhttp.open("GET", "/ruanganDeta", true);
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
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click',function() {
                $('#deleteModal').modal('show');
                $tr = $(this).closest('tr');
                var data = JSON.parse($(this).attr("data"));
                $("#inputDeleteId").val(data.id);
                $("#namaDeleteRuangan").html(data.ruangan);
            });

            $('#deleteForm').on('submit',function(e) {
                e.preventDefault();
                var id = $('#inputDeleteId').val();
                $.ajax({
                    type: "POST",
                    url: "/it/ruangan/"+id,
                    data: $('#deleteForm').serialize(),
                    success: function (response) {
                        $("#deleteModal").modal('hide')
                        swal("SUKSES !", "Data ruangan berhasil dihapus !", "success");
                        const xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                $("#ruanganTable").html(this.responseText);
                            }
                        };
                        xhttp.open("GET", "/ruanganDeta", true);
                        xhttp.send();
                    },
                    error: function(error) {
                        swal("GAGAL !", "Terdapat kesalahan pada server. Silahkan hubungi pihak IT", "error");
                    }
                });
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
              <img alt="" src="/iniTemplate/dist/iconModal/ruanganAdd.png" width="200px">
            </div>
            <div class="onboarding-content with-gradient">
              <h4 class="onboarding-title">
                Tambah Ruangan Baru
              </h4>
              <div class="onboarding-text">
                Masukkan nama ruangan baru yang ingin ditambahkan kedalam aplikasi.
              </div>
              <form id="addForm">
                @csrf
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                        <input name="ruangan" id="inputAddRuangan" placeholder="Masukkan Nama Ruangan Baru.." type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group text-center">
                        <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="submit">Tambah Ruangan Baru</button>
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

    {{-- modal edit --}}
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="editModal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Tutup</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-side-by-side">
              <div class="onboarding-media">
                <img alt="" src="/iniTemplate/dist/iconModal/ruanganAdd.png" width="200px">
              </div>
              <div class="onboarding-content with-gradient">
                <h4 class="onboarding-title">
                  Ubah Nama Ruangan
                </h4>
                <div class="onboarding-text">
                  Ubah nama ruangan dengan memasukkan nama ruangan baru.
                </div>
                <form id="editForm">
                  @csrf
                  @method('PATCH')
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                            <input name="id" id="inputEditId" type="hidden"/>
                            <input name="ruangan" id="inputEditRuangan" placeholder="Ubah Nama Ruangan.." type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group text-center">
                          <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="submit">Ubah Nama Ruangan</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- end modal edit --}}

      {{-- modal hapus --}}
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="deleteModal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Tutup</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-side-by-side">
              <div class="onboarding-media">
                <img alt="" src="/iniTemplate/dist/iconModal/ruanganAdd.png" width="200px">
              </div>
              <div class="onboarding-content with-gradient">
                <h4 class="onboarding-title">
                  Hapus Ruangan
                </h4>
                <div class="onboarding-text">
                  APAKAH ANDA YAKIN INGIN MENGHAPUS RUANGAN YANG DIPILIH ? <br /><br />
                  <p id="namaDeleteRuangan" class="masariuman-deleteRuangan"></p>
                </div>
                <form id="deleteForm">
                  @csrf
                  @method('delete')
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <input name="id" id="inputDeleteId" type="hidden"/>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group text-center">
                          <button class="mr-2 mb-2 btn btn-danger" data-target="#onboardingWideFormModal" data-toggle="modal" type="submit">Hapus Ruangan</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- end modal edit --}}
@endsection
