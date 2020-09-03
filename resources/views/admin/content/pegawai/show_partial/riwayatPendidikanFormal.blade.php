<div class="text-center masariuman-titleTable">data riwayat pendidikan formal</div>
@if ($ketersediaan === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data Riwayat Pendidikan Formal</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="width200 text-center">Tingkat Pendidikan</th>
                    <th class="text-center">Nama Sekolah</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendidikan_formal as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->tingkat_pendidikan}}</td>
                        <td class="text-center">{{$item->nama_sekolah}}</td>
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
            $("#tingkatPendidikan").html(data.tingkat_pendidikan);
            $("#namaSekolah").html(data.nama_sekolah);
            $("#jurusan").html(data.jurusan_prodi);
            $("#tahunMasuk").html(data.tahun_masuk);
            $("#tahunLulus").html(data.tahun_lulus);
            $("#tempatBelajar").html(data.tempat_belajar);
            $("#lokasi").html(data.lokasi);
            $("#nomorIjazah").html(data.nomor_ijazah);
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
                <img alt="" src="/iconModal/toga.png" width="200px">
              </div>
              <div class="onboarding-content with-gradient masariuman-width1000px">
                <h4 class="onboarding-title">
                    Detail Data Pendidikan Formal
                </h4>
                <div class="onboarding-text">
                    <table class="mb-0 table table-striped">
                        <tbody>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TINGKAT PENDIDIKAN</th>
                        <td id="tingkatPendidikan"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NAMA SEKOLAH/UNIVERSITAS</th>
                        <td id="namaSekolah"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">JURUSAN/PROGRAM STUDI</th>
                        <td id="jurusan"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TAHUN MASUK</th>
                        <td id="tahunMasuk"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TAHUN LULUS</th>
                        <td id="tahunLulus"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TEMPAT BELAJAR</th>
                        <td id="tempatBelajar"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">LOKASI</th>
                        <td id="lokasi"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NOMOR IJAZAH</th>
                        <td id="nomorIjazah"></td>
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
