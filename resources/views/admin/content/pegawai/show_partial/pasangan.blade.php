<div class="text-center masariuman-titleTable">Data {{ $pegawai->jenis_kelamin === 'W' ? 'Suami' : 'Istri' }}</div>
@if ($ketersediaan === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data {{ $pegawai->jenis_kelamin === 'W' ? 'Suami' : 'Istri' }}</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nomor {{ $pegawai->jenis_kelamin === 'W' ? 'Karsu (Kartu Suami)' : 'Karis (Kartu Istri)' }}</th>
                    <th class="text-center">Nama {{ $pegawai->jenis_kelamin === 'W' ? 'Suami' : 'Istri' }}</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
                </thead>
            <tbody>
                @foreach ($istri_suami as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nama}}</td>
                        <td class="text-center">{{$item->nomor_karis_karsu}}</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info modalTrigger" title="Lihat Data" data="{{$item}}"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif





<script>
    $(document).ready(function() {
        $('.modalTrigger').on('click',function() {
            $('#showDetail').modal('show');
            var data = JSON.parse($(this).attr("data"));
            $("#nama").html(data.nama);
            $("#nomorKarisKarsu").html(data.nomor_karis_karsu);
            $("#tanggalLahir").html(data.tanggal_lahir);
            $("#tanggalNikah").html(data.tanggal_nikah);
            $("#tingkatPendidikan").html(data.tingkat_pendidikan);
            $("#pekerjaan").html(data.pekerjaan);
            $("#status").html(data.status_suami_istri);
        });
    });
</script>







{{-- modal --}}
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="showDetail" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered masariuman-maxWidth1300px" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Tutup</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-side-by-side">
              <div class="onboarding-media">
                <img alt="" src="/iconModal/couple.png" width="200px">
              </div>
              <div class="onboarding-content with-gradient masariuman-width1000px">
                <h4 class="onboarding-title">
                    Detail Data {{ $pegawai->jenis_kelamin === 'W' ? 'Suami' : 'Istri' }}
                </h4>
                <div class="onboarding-text">
                    <table class="mb-0 table table-striped">
                        <tbody>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NAMA {{ $pegawai->jenis_kelamin === 'W' ? 'SUAMI' : 'ISTRI' }}</th>
                        <td id="nama"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NOMOR {{ $pegawai->jenis_kelamin === 'W' ? 'KARSU (KARTU SUAMI)' : 'KARIS (KARTU ISTRI)' }}</th>
                        <td id="nomorKarisKarsu"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TANGGAL LAHIR</th>
                        <td id="tanggalLahir"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TANGGAL NIKAH</th>
                        <td id="tanggalNikah"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TINGKAT PENDIDIKAN</th>
                        <td id="tingkatPendidikan"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">PEKERJAAN</th>
                        <td id="pekerjaan"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">STATUS {{ $pegawai->jenis_kelamin === 'W' ? 'SUAMI' : 'ISTRI' }}</th>
                        <td id="status"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
{{-- end modal --}}
