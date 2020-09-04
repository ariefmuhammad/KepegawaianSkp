<div class="text-center masariuman-titleTable">Data anak</div>
@if ($ketersediaan === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data anak</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nama Anak</th>
                    <th class="text-center">Status Anak</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anak as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nama}}</td>
                        <td class="text-center">{{$item->status_anak}}</td>
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
            $("#jenisKelamin").html(data.jenis_kelamin);
            $("#tempatLahir").html(data.tempat_lahir);
            $("#tanggalLahir").html(data.tanggal_lahir);
            $("#statusAnak").html(data.status_anak);
            $("#pendidikan").html(data.pendidikan);
            $("#pekerjaan").html(data.pekerjaan);
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
                <img alt="" src="/iconModal/kid.png" width="200px">
              </div>
              <div class="onboarding-content with-gradient masariuman-width1000px">
                <h4 class="onboarding-title">
                    Detail Data Anak
                </h4>
                <div class="onboarding-text">
                    <table class="mb-0 table table-striped">
                        <tbody>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NAMA ANAK</th>
                        <td id="nama"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">JENIS KELAMIN</th>
                        <td id="jenisKelamin"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TEMPAT LAHIR</th>
                        <td id="tempatLahir"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TANGGAL LAHIR</th>
                        <td id="tanggalLahir"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">STATUS ANAK</th>
                        <td id="statusAnak"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">PENDIDIKAN</th>
                        <td id="pendidikan"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">PEKERJAAN</th>
                        <td id="pekerjaan"></td>
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
