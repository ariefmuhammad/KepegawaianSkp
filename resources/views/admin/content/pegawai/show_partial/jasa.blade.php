<div class="text-center masariuman-titleTable">Data tanda jasa/penghargaan</div>
@if ($ketersediaan === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data tanda jasa/penghargaan</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nama Tanda Jasa/Penghargaan</th>
                    <th class="text-center">Negara/Instansi Pemberi</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penghargaan as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nama_penghargaan}}</td>
                        <td class="text-center">{{$item->pemberi}}</td>
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
            $("#namaPenghargaan").html(data.nama_penghargaan);
            $("#tanggalPerolehan").html(data.tanggal_perolehan);
            $("#nomor").html(data.nomor);
            $("#pemberi").html(data.nopemberimor_sk);
            $("#jabatanPemberi").html(data.jabatan_pemberi);
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
                <img alt="" src="/iconModal/achievement.png" width="200px">
              </div>
              <div class="onboarding-content with-gradient masariuman-width1000px">
                <h4 class="onboarding-title">
                    Detail Data Tanda Jasa/Penghargaan
                </h4>
                <div class="onboarding-text">
                    <table class="mb-0 table table-striped">
                        <tbody>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NAMA TANDA JASA/PENGHARGAAN</th>
                        <td id="namaPenghargaan"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TANGGAL PEROLEHAN</th>
                        <td id="tanggalPerolehan"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NOMOR</th>
                        <td id="nomor"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NEGARA/INSTANSI PEMBERI</th>
                        <td id="pemberi"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">JABATAN PEMBERI</th>
                        <td id="jabatanPemberi"></td>
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
