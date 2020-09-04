<div class="text-center masariuman-titleTable">Data hukuman disiplin</div>
@if ($ketersediaan === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data hukuman disiplin</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Kode Hukuman</th>
                    <th class="text-center">Nomor SK</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hukuman as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->kode_hukuman}}</td>
                        <td class="text-center">{{$item->nomor_sk}}</td>
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
            $("#kodeHukuman").html(data.kode_hukuman);
            $("#nomorSk").html(data.nomor_sk);
            $("#tanggalSk").html(data.tanggal_sk);
            $("#tmtBerlaku").html(data.tmt_berlaku);
            $("#pejabatPembuat_sk").html(data.pejabat_pembuat_sk);
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
                    Detail Data Hukuman Disiplin
                </h4>
                <div class="onboarding-text">
                    <table class="mb-0 table table-striped">
                        <tbody>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">KODE HUKUMAN</th>
                        <td id="kodeHukuman"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NOMOR SK</th>
                        <td id="nomorSk"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TANGGAL SK</th>
                        <td id="tanggalSk"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TMT BERLAKU</th>
                        <td id="tmtBerlaku"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">PEJABAT PEMBUAT SK</th>
                        <td id="pejabatPembuat_sk"></td>
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
