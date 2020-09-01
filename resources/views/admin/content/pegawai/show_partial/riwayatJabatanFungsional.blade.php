<div class="text-center masariuman-titleTable">Data riwayat jabatan fungsional</div>
@if ($ketersediaan === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data riwayat jabatan fungsional</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nomor SK</th>
                    <th class="text-center">Nama Jabatan</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jabatan_fungsional as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nomor_sk}}</td>
                        <td class="text-center">{{$item->nama_jabatan}}</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#riwayat_jabatan_fungsional_show_{{$item->id}}"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

