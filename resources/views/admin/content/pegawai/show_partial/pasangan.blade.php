<div class="text-center masariuman-titleTable">Data {{ $pegawai->jenis_kelamin === 'W' ? 'Suami' : 'Istri' }}</div>
@if ($ketersediaan === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data {{ $pegawai->jenis_kelamin === 'W' ? 'Suami' : 'Istri' }}</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nomor Karis (Kartu Istri)</th>
                    <th class="text-center">Nama Istri</th>
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
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#istri_show_{{$item->id}}"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

