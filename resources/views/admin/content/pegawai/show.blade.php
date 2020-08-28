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
            <td>
                awd
            </td>
            <td>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id diam non elit pretium vehicula. Nullam pellentesque dictum leo in vestibulum. Nunc quis lectus tempus nisi sodales hendrerit eget et quam. Nam eleifend arcu ornare, dignissim velit cursus, venenatis augue. Maecenas pretium elit ac nisl vehicula vulputate. Nulla urna diam, auctor sed ultrices in, semper in sem. Nullam maximus justo et risus aliquet, pellentesque luctus lectus rutrum.

                    Sed nunc lectus, facilisis a dapibus ut, lacinia non ligula. Aenean in accumsan quam. Nunc et tortor ut purus tincidunt bibendum ullamcorper id risus. Aenean quis metus in ex elementum finibus a eget turpis. Vivamus rutrum orci eget dolor pharetra, eu finibus velit vestibulum. Etiam vitae arcu dignissim sem ultrices molestie. Nunc ornare tempus erat, vel gravida nulla mollis vel. Quisque at risus urna. Vivamus placerat tincidunt ultrices. Morbi dui ligula, egestas vitae ex in, sodales lacinia eros. Duis bibendum lacus in neque accumsan efficitur. Nunc rhoncus arcu et ante pharetra fermentum.

                    Mauris mollis dui at mauris euismod, sit amet euismod tellus fringilla. Vivamus nunc urna, viverra id volutpat sit amet, commodo ac tellus. Cras nec euismod metus. Vivamus tempus ultrices tempus. Morbi semper enim a vulputate vulputate. Nulla suscipit purus massa, et pharetra sapien dapibus sit amet. Mauris tempus turpis pellentesque auctor placerat. Sed porta neque risus. Duis et ante est. Etiam ex nisi, viverra ut faucibus bibendum, faucibus nec ipsum. Suspendisse euismod mollis tortor id feugiat. Ut volutpat non lorem sed placerat. Sed blandit vel quam at porta. Suspendisse ullamcorper nunc ut metus efficitur, ac posuere erat iaculis. Suspendisse lorem magna, consequat sit amet purus at, posuere luctus enim.

                    Curabitur augue nisl, vestibulum at molestie eget, vestibulum non purus. Integer eget nulla non ligula mollis lacinia. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris at dolor tincidunt, maximus enim eget, tristique lacus. Proin ut condimentum diam. Cras quis urna in enim venenatis tristique consequat vel arcu. Nunc metus ligula, elementum sed ipsum et, eleifend feugiat lacus. Mauris fermentum orci dictum tellus pretium, nec eleifend velit ultricies. Morbi sed nisl vulputate, rutrum tellus sit amet, congue risus. Curabitur ut dictum arcu, ac pellentesque orci. Ut pulvinar nisi felis, et tempus velit ultricies at. Donec finibus lorem sit amet sem laoreet, vitae sollicitudin metus aliquet.

                    Nam dictum lorem at dui venenatis ultricies. Proin vehicula vel nulla at dictum. Integer suscipit imperdiet metus, ut fermentum eros venenatis sed. Nunc tempor id tellus eu dictum. Morbi pretium blandit ipsum tristique aliquet. Fusce vel imperdiet ex. Donec quis mollis diam, mollis mollis orci.

                    Cras bibendum ac purus non volutpat. Proin vel lobortis lorem. Duis sed elit ac urna commodo suscipit. Cras tincidunt velit eu accumsan pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc magna ipsum, congue fringilla enim sit amet, pharetra sagittis lacus. Nunc eu sem sed nibh pulvinar feugiat non nec arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis metus turpis, consectetur quis scelerisque eget, ultricies vel mauris. Fusce viverra metus a faucibus maximus. Etiam bibendum tellus ex, et hendrerit diam ultricies a.

                    Nulla at nunc tellus. Vestibulum eros quam, tincidunt at fringilla eu, ultricies viverra orci. In id accumsan neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse convallis fringilla elit tempor congue. Maecenas imperdiet diam nunc, nec rutrum purus vulputate quis. Nam quis turpis sit amet quam hendrerit mollis vel quis dolor. Quisque finibus, tellus sed mattis pretium, lectus neque semper tortor, non tincidunt risus erat ac nibh. Mauris ornare aliquet sem et maximus. Sed id magna vestibulum, scelerisque nisi at, porttitor erat. Pellentesque congue, leo ac iaculis mollis, ex libero tempor ex, a dictum est nulla et arcu. Maecenas ac urna vel quam pretium dapibus a at nisi. Fusce sollicitudin augue in faucibus rhoncus. Ut vitae consectetur odio. Praesent gravida vel ex vehicula fermentum.

                    In posuere nisl tortor, sed lobortis mauris fermentum id. Cras eu ex vel velit tristique elementum vel sit amet massa. Duis ac purus dictum, aliquet metus in, cursus nisl. Proin auctor porta massa in condimentum. Suspendisse id justo eu metus viverra pulvinar a sit amet dolor. Mauris interdum, est vel pulvinar venenatis, lectus tortor imperdiet lorem, vel ultrices justo libero vitae libero. In et mattis turpis. Nam condimentum dolor et augue elementum, eu posuere lorem dapibus. Morbi id vestibulum ante.

                    Nam nulla ligula, hendrerit vitae eleifend et, vulputate at leo. Sed purus justo, finibus in pretium a, lacinia vel libero. Mauris sem ante, blandit vitae dignissim et, interdum sed dui. Duis sed nibh vitae neque volutpat suscipit. In bibendum quis felis et facilisis. Vestibulum sed risus eu erat consequat facilisis. Quisque consequat eros a odio ullamcorper rhoncus.

                    Curabitur et mi non ex bibendum fringilla. Nullam enim nibh, vulputate eget ipsum in, rhoncus imperdiet lectus. Curabitur imperdiet, massa id tristique tempus, odio eros tincidunt purus, nec suscipit felis risus in quam. Donec imperdiet sem eget semper rhoncus. Sed in ex velit. Ut lobortis turpis eget euismod iaculis. Duis vestibulum ex non est sollicitudin tempor.
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
