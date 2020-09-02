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
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info modalTrigger" title="Lihat Data" data-target="#showDetail" data-toggle="modal"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif




{{-- modal --}}
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="showDetail" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Tutup</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-side-by-side">
              <div class="onboarding-media">
                <img alt="" src="/iniTemplate/dist/iconModal/ruanganAdd.png" width="200px">
              </div>
              <div class="onboarding-content with-gradient">
                <h4 class="onboarding-title">
                  Tambah Ruangan Baru
                </h4>
                <div class="onboarding-text">
                  Masukkan nama ruangan baru yang ingin ditambahkan kedalam aplikasi.
                </div>
                <form id="addForm">
                  @csrf
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <input name="ruangan" id="inputAddRuangan" title="Nama Ruangan" placeholder="Masukkan Nama Ruangan Baru.." type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group text-center">
                          <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingWideFormModal" data-toggle="modal" type="submit">Tambah Ruangan Baru</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
{{-- end modal --}}
