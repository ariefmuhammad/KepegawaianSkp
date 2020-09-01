<div class="text-center masariuman-titleTable">Data riwayat jabatan struktural</div>
@if ($ketersediaan === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data riwayat jabatan struktural</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nama Jabatan</th>
                    <th class="text-center">Unit Kerja</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jabatan_struktural as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nama_jabatan}}</td>
                        <td class="text-center">{{$item->unit_kerja}}</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#riwayat_jabatan_struktural_show_{{$item->id}}"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

