<div class="text-center masariuman-titleTable">data riwayat diklat teknis</div>
@if ($ketersediaan === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data Riwayat diklat teknis</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nama Diklat</th>
                    <th class="text-center">Lokasi</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diklat_teknis as $no => $item)
                    <tr>
                        <th class="text-center">1</th>
                        <td class="text-center">{{$item->nama_diklat}}</td>
                        <td class="text-center">{{$item->lokasi}}</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#riwayat_diklat_teknis_show_{{$item->id}}"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

