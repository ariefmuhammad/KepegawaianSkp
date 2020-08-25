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
    <button class="mr-2 mb-2 btn btn-primary" type="button">Tambah Ruangan Baru</button>
    <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="button">Modal with form</button>

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


@section('modal')
{{-- modal tambah --}}
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingWideFormModal" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-lg modal-centered" role="document">
    <div class="modal-content text-center">
      <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Skip Intro</span><span class="os-icon os-icon-close"></span></button>
      <div class="onboarding-side-by-side">
        <div class="onboarding-media">
          <img alt="" src="/iniTemplate/dist/img/bigicon5.png" width="200px">
        </div>
        <div class="onboarding-content with-gradient">
          <h4 class="onboarding-title">
            Example Request Information
          </h4>
          <div class="onboarding-text">
            In this example you can see a form where you can request some additional information from the customer when they land on the app page.
          </div>
          <form>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="">Your Full Name</label><input class="form-control" placeholder="Enter your full name..." type="text" value="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="">Your Role</label><select class="form-control">
                    <option>
                      Web Developer
                    </option>
                    <option>
                      Business Owner
                    </option>
                    <option>
                      Other
                    </option>
                  </select>
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
