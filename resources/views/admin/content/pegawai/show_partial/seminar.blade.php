<div class="text-center masariuman-titleTable">Data seminar/lokakarya/simposium</div>
@if ($ketersediaan === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data seminar/lokakarya/simposium</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nama Kegiatan</th>
                    <th class="text-center">Lokasi Kegiatan</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seminar as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nama_kegiatan}}</td>
                        <td class="text-center">{{$item->lokasi}}</td>
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
            $("#namaKegiatan").html(data.nama_kegiatan);
            $("#lokasi").html(data.lokasi);
            $("#tempatKegiatan").html(data.tempat_kegiatan);
            $("#penyelenggara").html(data.penyelenggara);
            $("#tahunSeminar").html(data.tahun_seminar);
            $("#kedudukanDalamSeminar").html(data.kedudukan_dalam_seminar);
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
                <img alt="" src="/iconModal/userCertificate.png" width="200px">
              </div>
              <div class="onboarding-content with-gradient masariuman-width1000px">
                <h4 class="onboarding-title">
                    Detail Data Seminar/Lokakarya/Simposium
                </h4>
                <div class="onboarding-text">
                    <table class="mb-0 table table-striped">
                        <tbody>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NAMA KEGIATAN</th>
                        <td id="namaKegiatan"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">LOKASI KEGIATAN</th>
                        <td id="lokasi"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TEMPAT KEGIATAN</th>
                        <td id="tempatKegiatan"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">PENYELENGGARA</th>
                        <td id="penyelenggara"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TAHUN</th>
                        <td id="tahunSeminar"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">KEDUDUKAN DALAM SEMINAR</th>
                        <td id="kedudukanDalamSeminar"></td>
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
