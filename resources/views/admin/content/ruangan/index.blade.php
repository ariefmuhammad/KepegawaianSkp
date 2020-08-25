@extends('admin.template')

@push('css')
@endpush


@section('title')
    Beranda
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
    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Ruangan Baru</button>
</div>
<div class="table-responsive">
    <table id="tabeldata" width="100%" class="table table-striped table-lightfont">
        <thead>
            <tr>
                <th>Ruangan</th>
                <th>Aksi</th>
            </tr>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
            </tr>
            <tr>
                <td>Tigerasdsa Nixon</td>
                <td>Systemasdsa Architect</td>
            </tr>
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
                    "emptyTable": "Data Tidak Ada",
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
            $('"addform"').on('submit',function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "/it/ruangan",
                    data: $('$addform').serialize(),
                    success: function (response) {
                        console.log(response)
                        $("#addstudentmodal").modal('hide')
                        alert("Data Saved");
                    },
                    error: function(error) {
                        console.log(error)
                        alert("data not saved");
                    }
                });
            });
        });
    </script>
@endpush


@section('modal')
    {{-- modal tambah --}}
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingWideFormModal" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-lg modal-centered" role="document">
        <div class="modal-content text-center">
          <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Tutup</span><span class="os-icon os-icon-close"></span></button>
          <div class="onboarding-side-by-side">
            <div class="onboarding-media">
              <img alt="" src="/iniTemplate/dist/img/bigicon5.png" width="200px">
            </div>
            <div class="onboarding-content with-gradient">
              <h4 class="onboarding-title">
                Tambah Ruangan Baru
              </h4>
              <div class="onboarding-text">
                Masukkan nama ruangan baru yang ingin ditambahkan kedalam aplikasi.
              </div>
              <form class="" action="/it/ruangan" method="post">
                @csrf
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                        <input name="ruangan" id="exampleAddress" placeholder="Masukka Nama Ruangan Baru.." type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group text-center">
                        <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Tambah Ruangan Baru</button>
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
