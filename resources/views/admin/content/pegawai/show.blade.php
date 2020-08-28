@extends('admin.template')

@push('css')
@endpush


@section('title')
    {{$pegawai->user->name}}
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
            <span>{{$pegawai->user->name}}</span>
        </li>
    </ul>
@endsection


@section('content')
<div class="text-center">
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info active" id="dasarB">Dasar</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_pendidikan_formalB">Riwayat Pendidikan Formal</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_diklat_fungsionalB">Riwayat Diktal Fungsional</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_diklat_teknisB">Riwayat Diklat Teknis</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_diklat_penjenjanganB">Riwayat Diklat Penjenjangan</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_kepangkatanB">Riwayat Kepangkatan</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_jabatan_strukturalB">Riwayat Jabatan Struktural</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_jabatan_fungsionalB">Riwayat Jabatan Fungsional</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="riwayat_pekerjaanB">Riwayat Pekerjaan/Jabatan Teknis</button>
    @if ($pegawai->jenis_kelamin === 'W')
        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="pasanganB">Suami</button>
    @else
        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="pasanganB">Istri</button>
    @endif
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="anakB">Anak</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="seminarB">Seminar/Lokakarya/Simposium</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="jasaB">Tanda Jasa/Penghargaan</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="hukumB">Hukuman Disiplin</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="organisasiB">Keanggotaan Organisasi</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" id="keluargaB">Keluarga</button>
    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info">SKP</button>
</div>
<div>
    <table>
        <tr>
            <td class="masariuman-width30percent">
                awd
            </td>
            <td>
                <div id="benda">
                    dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar dasar
                </div>
            </td>
        </tr>
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
            $('#dasarB').on('click',function() {
                const xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        $("#benda").html(this.responseText);
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
                        $("#benda").fadeOut(400);
                        $("#benda").html(this.responseText);
                        $("#benda").fadeIn(400);
                    }
                };
                xhttp.open("GET", "/riwayatPendidikanFormalDeta", true);
                xhttp.send();
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
