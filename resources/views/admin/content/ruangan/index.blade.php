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
                <span class="masariuman-bold">BERANDA</span> <br/>
                <small>ini adalah beranda</small>
            </div>
        </div>
        <div class="top-menu-controls">
            <button class="mr-2 mb-2 btn btn-outline-primary" type="button"><i class="batch-icon-bulb-2"></i> PETUNJUK <i class="batch-icon-bulb"></i></button>
        </div>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item">
            <span>Beranda</span>
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
@endpush
